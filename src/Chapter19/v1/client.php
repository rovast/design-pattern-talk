<?php

require_once __DIR__.'/../../../vendor/autoload.php';

// 总部
$HQ = new \Rovast\DesignPatternTalk\Chapter19\v1\ConcreteCompany('南京总部');

$HQ->add(new \Rovast\DesignPatternTalk\Chapter19\v1\HRDepartment('总部人力资源部'));
$HQ->add(new \Rovast\DesignPatternTalk\Chapter19\v1\FinanceDepartment('总公司财务部'));

$shanghai = new \Rovast\DesignPatternTalk\Chapter19\v1\ConcreteCompany('上海分公司');
$shanghai->add(new \Rovast\DesignPatternTalk\Chapter19\v1\HRDepartment('上海人力资源部'));
$shanghai->add(new \Rovast\DesignPatternTalk\Chapter19\v1\FinanceDepartment('上海财务分部'));
$HQ->add($shanghai);

$shenzhen = new \Rovast\DesignPatternTalk\Chapter19\v1\ConcreteCompany('深圳分公司');
$shenzhen->add(new \Rovast\DesignPatternTalk\Chapter19\v1\HRDepartment('深圳人力资源部'));
$shenzhen->add(new \Rovast\DesignPatternTalk\Chapter19\v1\FinanceDepartment('深圳财务分部'));
$HQ->add($shenzhen);

echo '--- 总部---'.PHP_EOL;
$HQ->display();

echo '--- 上海分部---'.PHP_EOL;
$shanghai->display();

echo '--- 深圳分部---'.PHP_EOL;
$shenzhen->display();
