<?php
/*
 * Je veux une application qui prendra en paramètres un appel téléphonique,
 *  il peut être mobile, fixe ou whatsapp, et réceptionné par un répondeur ou un standardiste.
 * Quel qu'il soit, il doit diffuser un message clair et enregistrer la demande
 * et apporter une réponse s’il a un cerveau.
 */
namespace Casir\App;

abstract class ProduitElectroMenager {

}

class LaveLinge extends ProduitElectroMenager {

}

class Message {
    public ProduitElectroMenager $produit;
    public string $problem;
    public Caller $caller;

    public function __construct(?ProduitElectroMenager $produit, Caller $caller, string $problem)
    {
    }
}

interface AnswerInterface {
    public function storeMessage() : bool;
}

abstract class Answer implements AnswerInterface {
    protected Caller $caller;
    public function __construct(Caller $caller)
    {
    }

    abstract function getMessage() : string;

    public function decrocher() {
        echo $this->getMessage();
    }
}

class RepondeurMecanique extends Answer {
    public function getMessage(): string
    {
        return 'Après le Bip ! Laissez votre message';
    }

    public function storeMessage(): bool
    {
        new Message(null, $this->caller, 'Mon lavelinge marche pas' );

    }
}

class RepondeurHumain extends Answer {
    public function getMessage(): string
    {
        return 'Allo ! C\'est Sarah ! Que puis-je pour vous ?';
    }

    public function storeMessage(): bool
    {
        new Message(new LaveLinge(), $this->caller, 'Mon lavelinge marche pas' );
    }

    public function decrocher()
    {
        parent::decrocher();

        echo 'Message gentil et rassurant';
    }
}

Interface PhoneInterface {
    public function compose() : string;
}

abstract class Caller implements {
    public string $number;
    public function call($number) {

    }
}

trait HasRepertoire {
    public function compose(int $cardId) {
        return '0606060606';
    }
}

class PhoneFixe extends Caller{

}

class PhoneMobile extends Caller{
    use HasRepertoire;
}

class WhatsApp extends Caller {
    use HasRepertoire;
}
