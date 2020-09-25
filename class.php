<?php
    $yamada = new Employee();
    $yamada->name = '山田';
    $yamada->setState('休憩している');
    echo $yamada->name,'さんは',$yamada->getState(),PHP_EOL;
    // $yamada->work();
    
    class Employee {
            public $name;
            // public $state = '働いている';
            private $state = '働いている';
            
            // Employeeクラスの$stateを返却する
            public function getState() {
                return $this->state;
            }
            // Employeeクラスの$state値を書き換える
            public function setState($state) {
                $this->state = $state;
            }

            public function work() {
                echo '書類を整理しています',PHP_EOL;
            }
        }

?>
