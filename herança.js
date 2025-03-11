// cria a classe Pessoa
// com parametro de nome e idade
class pessoa{
    constructor(nome, idade){
        this.nome = nome;
        this.idade = idade;
    }

    apresentar = () => console.log(`olá, sou ${this.nome} e tenho ${this.idade} anos.`);
   
}
   
class aluno extends pessoa{
    estudar = () => console.log(`${this.nome} está estudando.`);

    fake = () => console.log(`${this.nome} está vendo tenis`);
}

class professor extends pessoa{
    ensinar = () => console.log(`${this.nome} está encinando.`);
}

// criando objetos
const miguel = new aluno("miguel", 18)
const gustavo = new aluno("gustavo", 17)
const raul = new professor("raul", 28)
const nadja = new professor("nadja", 18)

miguel.apresentar()
gustavo.apresentar()
raul.apresentar()
nadja.apresentar()

miguel.estudar()
gustavo.fake()
raul.ensinar()
nadja.ensinar()