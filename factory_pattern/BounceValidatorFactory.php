<?php

class BounceValidatorFactory {
    
    /**
     * @var BounceValidator
     * */
    private static $bounceValidator;

    /**
     * @return BounceValidator
     * */
    public static function getInstance() {
        if (!static::$bounceValidator) {
            static::$bounceValidator = new NeverBounceValidatorImp(true, "asda89sd7a9s8d6a8sd76ada5d6867a7sd86a87sd");
        }
        return static::$bounceValidator;
    }

    /**
     * Construtor do tipo protegido previne que uma nova instância da
     * Classe seja criada através do operador `new` de fora dessa classe.
     */
    protected function __construct()
    {
    }

    /**
     * Método clone do tipo privado previne a clonagem dessa instância
     * da classe
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
