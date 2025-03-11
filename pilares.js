// Criando classe Aluno
class Aluno{
    #nota
    constructor(nome, idade, nota){
        // constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota =  nota;
    }
    estudar = () => console.log(`${this.nome} está estudando.`);
    verificar = () => this.#nota
}

const miguel = new Aluno("miguel" , 18 , 103)

console.log(miguel.nome, miguel.verificar())