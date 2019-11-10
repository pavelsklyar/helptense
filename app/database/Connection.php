<?php


class Connection
{
    public static function getConnectionFromFile($file)
    {
        if (file_exists($file)) {
            $config = parse_ini_file($file, true);

            try {
                if (!is_null($config)) {
                    $mysql['server'] = $config['database']['server'];
                    $mysql['user'] = $config['database']['user'];
                    $mysql['password'] = $config['database']['password'];
                    $mysql['database'] = $config['database']['database'];

                    return self::getMysqliConnection($mysql);
                }
                else {
                    throw new Exception("Failed to open your .ini-file!");
                }
            }
            catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    private static function getMysqliConnection(array $mysql)
    {
        $connection = mysqli_connect(
            $mysql['server'],
            $mysql['user'],
            $mysql['password'],
            $mysql['database']
        ) or die (mysqli_connect_error());
        mysqli_query($connection, "set NAMES utf8");

        return $connection;
    }

    public static function getConnection()
    {
        return self::getConnectionFromFile(CONFIG . "config.ini");
    }

    public static function closeConnection($connection)
    {
        return mysqli_close($connection);
    }
}