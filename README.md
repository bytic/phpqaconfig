bytic QA configurations
================================


PHP Code Sniffer
----------------

Configuration file: *bytic.phpcs.xml*

### Usage

1. Link bytic/qaconfig repo as composer dependency

    `$ composer require bytic/qaconfig:^1.0`

2. Extend provided configuration to adapt it to your project.  
   
   ``` xml
    <?xml version="1.0" encoding="UTF-8"?>
    <ruleset name="DEMO-PHP project code style checker config">
        <rule ref="./vendor/bytic/qaconfig/bytic.phpcs.xml">
            <exclude name="PSR2.Classes.PropertyDeclaration.Underscore"/>
        </rule>
        <rule ref="PSR1.Classes.ClassDeclaration">
            <exclude-pattern>*/_stubs.php</exclude-pattern>
        </rule>
        <rule ref="Generic.CodeAnalysis.UnconditionalIfStatement.Found">
            <exclude-pattern>*/_stubs.php</exclude-pattern>
        </rule>
    </ruleset>
    ```
   
   
   
   
Inspiration
----------------
* https://github.com/jmolivas/phpqa

