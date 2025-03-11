# Hospital - A História dos Pacientes e Profissionais 🏥

> Este projeto é uma página web dedicada a contar a história dos pacientes e profissionais de um hospital fictício. A página foi desenvolvida para apresentar interações entre diferentes personagens, como médicos, enfermeiros, recepcionistas e pacientes, além de apresentar um alerta de cirurgia com base em informações dos pacientes. A **prototipagem** foi realizada utilizando **HTML**, **CSS** e **JavaScript** para proporcionar uma experiência dinâmica. 🎨⚙️

---

## Estrutura do Projeto 📁

A página contém as seguintes seções:

1. **Cabeçalho**: Apresentação do título da página. 🔝
2. **História dos Personagens**: Descrição das interações entre os personagens do hospital, incluindo médicos, enfermeiros, recepcionistas e pacientes. 🧑‍⚕️🩺
3. **Alerta de Cirurgia**: Exibição das chances de mortalidade dos pacientes antes de uma cirurgia. ⚠️
4. **Rodapé**: Informações adicionais sobre o projeto. ⚖️

---

## Tecnologias Utilizadas 💻

- **HTML**: Para estruturar a página e exibir os dados de forma organizada. 🏗️
- **CSS**: Para estilização e tornar a página mais atraente e funcional. 🎨
- **JavaScript**: Para implementar a lógica interativa dos personagens e suas interações no hospital. ⚙️

---

## Funcionalidades 🔧

- **Interações entre Personagens**: Cada personagem tem métodos que simulam suas ações, como atendimento médico, cirurgia e cuidados com o paciente. 🩺💬
- **Alerta de Cirurgia**: Exibição do risco de falha na cirurgia, com base em uma porcentagem informada no código. 🚨
- **Histórias Dinâmicas**: Através de instâncias de objetos, a página gera conteúdos dinâmicos, como falas dos personagens e interações entre pacientes e médicos. 📜

---

## Breve Resumo sobre Programação Orientada a Objetos (POO) 🧑‍💻

A **Programação Orientada a Objetos (POO)** é um paradigma de programação baseado no conceito de "objetos". Um objeto é uma instância de uma classe e possui atributos (dados) e métodos (funções) que operam sobre esses dados. O objetivo principal da POO é organizar e estruturar o código de forma modular e reutilizável. Os quatro pilares da POO são:

1. **Encapsulamento**: Oculta os detalhes internos de um objeto e só permite o acesso através de métodos definidos. Isso garante a proteção dos dados e controla como eles são manipulados.
   
2. **Herança**: Permite que uma classe herde características (atributos e métodos) de outra, facilitando a reutilização de código. Classes filhas podem adicionar ou modificar comportamentos herdados.

3. **Polimorfismo**: Permite que objetos de diferentes classes sejam tratados de forma uniforme, com métodos que podem se comportar de maneira diferente dependendo da classe do objeto.

4. **Abstração**: Permite ocultar complexidades, mostrando apenas as funcionalidades essenciais para o usuário. Isso ajuda a simplificar a interação com o sistema.

A POO é amplamente utilizada por sua capacidade de criar sistemas mais organizados, escaláveis e fáceis de manter.

---

## Exemplo de Interação entre os Personagens 🗣️

1. **Dr. Cirilo (Médico)**: Realiza uma cirurgia no paciente Lucas.
2. **Enfermeiro Kokimoto**: Cuida do paciente Lucas e aplica a medicação necessária.
3. **Recepcionista Joelma**: Registra a entrada dos pacientes e mantém o fluxo de trabalho no hospital.

---

## Como Funciona 🧑‍💻

- **Classes**: A página utiliza uma abordagem orientada a objetos, criando classes para representar diferentes tipos de pessoas no hospital, como **Pessoa**, **Paciente**, **Médico**, **Enfermeiro**, **Recepcionista** e **Diretor**.
- **Herança**: Classes como **Paciente** e **Funcionario** herdam da classe **Pessoa**, enquanto subclasses como **Médico** e **Enfermeiro** herdam da classe **Funcionario**.
- **Métodos**: Cada classe possui métodos que descrevem suas interações, como **falar()**, **realizarCirurgia()**, **cuidarPaciente()**, entre outros.

---

## Rodapé ⚖️

> Este projeto foi desenvolvido com o objetivo de ensinar conceitos de programação orientada a objetos e interatividade na web, utilizando JavaScript para simular um hospital fictício. O código é de autoria do desenvolvedor e está disponível para visualização e aprendizado.
