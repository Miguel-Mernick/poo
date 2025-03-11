class Pessoa {
    constructor(nome) {
        // Impede a instância direta de Pessoa
        if (this.constructor === Pessoa) {
            throw new Error("Quem você pensa que é, tentando criar uma Pessoa? Isso não é permitido, você está nas ideia!");
        }
        this.nome = nome;
    }
}

class Aluno extends Pessoa {
    apresentar = () => console.log(`olá, eu sou ${this.nome} e eu sou um aluno`);
}

class Professor extends Pessoa {
    apresentar = () => console.log(`olá, sou ${this.nome} e eu sou um professor.`);
}

// Criando instâncias das subclasses
const miguel = new Aluno("Miguel");
const raul = new Professor("Raul");

// Chamando os métodos de apresentação
miguel.apresentar();  // Saída: olá, eu sou Miguel e eu sou um aluno
raul.apresentar();    // Saída: olá, sou Raul e eu sou um professor

const ortelas = new Pessoa ("ortelas");
ortelas.apresentar();