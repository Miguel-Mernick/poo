// Criando a classe Aluno
class Aluno {
    // O método constructor é chamado quando criamos um novo objeto dessa classe
    constructor(nome, idade) {
        // Aqui estamos inicializando as propriedades 'nome' e 'idade' no objeto
        this.nome = nome;
        this.idade = idade;
    }

    // Atributos (métodos) que o objeto 'Aluno' pode ter
    estudar = () => console.log(`${this.nome} está estudando,`);  // Método que imprime uma mensagem dizendo que o aluno está estudando
    estuda = () => console.log(`${this.nome} está ficando rico,`); 
    estud = () => console.log(`${this.nome} está sofrendo de amor, com `); 
    idades = () => console.log(`estava comendo meleca e o`);  
    estu = () => console.log(`${this.nome} ficou com nojo quando viu.`);  
}

// Criando novos objetos da classe Aluno e chamando seus métodos
const miguel = new Aluno("miguel", 18);  // Criando um objeto 'miguel' com o nome "Miguel" e idade 18
miguel.estuda();  // Chamando o método 'estuda' do objeto 'miguel'
const gustavo = new Aluno("gustavo", 17); 
gustavo.estudar();  
const rafael = new Aluno("rafael", 17);
rafael.estud(); 
const gabriel = new Aluno("gabriel", 17);
console.log(`${gabriel.idade} anos`, gabriel.nome);  // Imprime a idade e nome do 'gabriel'
gabriel.idades(); 
const carlos = new Aluno("carlos", 17);
carlos.estu();