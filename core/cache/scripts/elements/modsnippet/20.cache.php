<?php  return 'if(isset($_GET[\'p\'])){
        if($_GET[\'p\']==1)echo "Заказать звонок";
        elseif($_GET[\'p\']==0)echo "Заказать звонок";
        else echo "Отправить заявку";
    }else echo "Отправить заявку";
return;
';