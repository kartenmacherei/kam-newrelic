#KAM-NEWRELIC
This package encapsulate setting up application and transaction names for NewRelic agent

##USAGE
$factory = new NewRelicFactory();

$agent = $factory->createNewRelicAgent('app'); //php.ini config newrelic.appname will be overridden with 'app'
$agent->nameTransaction('some-transaction-name'); //new relic transaction will be 'some-transaction-name'

$voidAgent = $factory->createVoidNewRelicAgent('app without newrelic extension');
$voidAgent->nameTransaction('some-transaction-name');