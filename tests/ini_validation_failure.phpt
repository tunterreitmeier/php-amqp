--TEST--
Bad INI settings are rejected
--SKIPIF--
<?php
if (!extension_loaded("amqp")) {
    print "skip";
}
?>
--INI--
amqp.host=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
amqp.vhost=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
amqp.port=-1
amqp.login=00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
amqp.password=00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
amqp.read_timeout=-1
amqp.write_timeout=-1
amqp.connect_timeout=-1
amqp.rpc_timeout=-1
amqp.timeout=-1
amqp.prefetch_count=-1
amqp.prefetch_size=-1
amqp.global_prefetch_count=-1
amqp.global_prefetch_size=-1
amqp.heartbeat=-1
amqp.channel_max=257
amqp.frame_max=-1
--FILE--
<?php
var_dump(ini_get('amqp.host'));
var_dump(ini_get('amqp.vhost'));
var_dump(ini_get('amqp.port'));
var_dump(ini_get('amqp.login'));
var_dump(ini_get('amqp.password'));
var_dump(ini_get('amqp.read_timeout'));
var_dump(ini_get('amqp.write_timeout'));
var_dump(ini_get('amqp.connect_timeout'));
var_dump(ini_get('amqp.rpc_timeout'));
var_dump(ini_get('amqp.timeout'));
var_dump(ini_get('amqp.prefetch_count'));
var_dump(ini_get('amqp.prefetch_size'));
var_dump(ini_get('amqp.global_prefetch_count'));
var_dump(ini_get('amqp.global_prefetch_size'));
var_dump(ini_get('amqp.heartbeat'));
var_dump(ini_get('amqp.channel_max'));
var_dump(ini_get('amqp.frame_max'));
?>
==DONE==
--EXPECT--
string(9) "localhost"
string(1) "/"
string(4) "5672"
string(5) "guest"
string(5) "guest"
string(1) "0"
string(1) "0"
string(1) "0"
string(1) "0"
string(0) ""
string(1) "3"
string(1) "0"
string(1) "0"
string(1) "0"
string(1) "0"
string(3) "256"
string(6) "131072"
==DONE==