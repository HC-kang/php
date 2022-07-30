<?php

/*
CREATE TABLE cache(
    `key` VARCHAR(255) PRIMARY KEY,
    `value` TEXT NOT NULL,
    `expiration` INT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
*/


// MySQL Backend Cache
interface CacheHandlerInterface
{
    public function put(string $key, string $value, int $expiration = null) : bool;
    public function get(string $key, Closure $callback = null);
    public function forget(string $key): bool;
    public function refresh(): bool;
}

class DatabaseCacheHandler implements CacheHandlerInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo) 
    {
        $this->pdo = $pdo;
    }

    public function put(string $key, string $value, int $expiration = null): bool
    {
        return $this->pdo
            ->prepare('INSERT INTO cache(`key`, `value`, `expiration`) VALUES(?, ?, ?)')
            ->execute([ $key, $value, $expiration ]);
    }

    public function get(string $key, Closure $callback = null)
    {
        $sth = $this->pdo->prepare('SELECT * FROM cache WHERE `key` = ?');

        if ($sth -> execute([$key]) && $row = $sth -> fetchObject()) {
            return $row->value;
        }
        return $callback ? call_user_func($callback) : null;
    }

    public function forget(string $key) : bool
    {
        return $this->pdo->prepare('DELETE FROM cache WHERE `key` = ?') -> execute([ $key ]);
    }

    public function refresh(): bool
    {
        $sth = $this->pdo->prepare('SELECT * from cache');
        if ($sth->execute()) {
            while ($row = $sth->fetchObject()) {
                $timestamp = strtotime($row->created_at);
                if ($row->expiration) {    
                    if (time() - $timestamp > $row->expiration) {
                        $this->forget($row->key);
                    }
                }
            }
            return true;
        }
        return false;
    }
}

class Cache
{
    private CacheHandlerInterface $handler;

    public function __construct(CacheHandlerInterface $handler)
    {
        $this->handler = $handler;   
    }

    public function __call($name, $args)
    {
        return $this->handler->$name(...$args);
    }
}

$databaseCacheHandler = new DatabaseCacheHandler(new PDO('mysql:dbname=php_oop;host=127.0.0.1;', 'root', 'root'));
$cache = new Cache($databaseCacheHandler);

// $cache->put('message', 'Hello, world');
// $cache->put('foo', serialize(new stdClass()), 10);

$cache->refresh();

var_dump($cache->get('message'));