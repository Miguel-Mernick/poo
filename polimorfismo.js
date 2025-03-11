class Pessoa {
    constructor(nome) {
        this.nome = nome;
    }
}

class Aluno extends Pessoa {
    estudar() {
        console.log(`Olá meu nome é ${this.nome}, e eu sou um aluno`);
    }
}

class Professor extends Pessoa {
    ensinar() {
        console.log(`Olá eu sou o ${this.nome}, e eu sou um professor`);
    }
}

const miguel = new Aluno("Miguel");
miguel.estudar();

const raul = new Professor("Raul");
raul.ensinar();
