## autoPartsStore
----

## Sumário
- CAPÍTULO I 	--

- CAPÍTULO II	--

- CAPÍTULO III	--

- CAPÍTULO IV	--

- CAPÍTULO V	--

- CAPÍTULO VI	--

##

```RESUMO```

Este trabalho foi motivado na procura de resolver problemas de gestão na área de venda de peças para automóveis. O objetivo principal é propor um sistema gerencial simples, a fim de que os funcionários consigam consultar estoque de peças, ferramentas e seus respectivos preços, além de conseguirem cadastrar novas peças, remover por escassez e alterar preço. O sistema também poderá verificar lojas disponíveis para encomendar peças e ferramentas em escassez. Algumas auto-peças demonstram não possuir sistema de gerenciamento versátil capaz de controlar o fluxo de pedidos e encomendas. Portanto, essa controle de fluxo proporciona uma maior produtividade por parte da empresa.

Palavras-Chave: Automóveis; Peças; Sistema Gerencial.

##

```ABSTRACT```

This work was motivated in the demand of solve problems of management in the Accessories-Parts sale field. The main objective is to propose a simple management system, so that employees are able to consult stock of parts, tools and their respective prices, besides being able to register new parts, remover for shortage and change the price. The system is also available for ordering spares and tools. Some companies demonstrate that they do not have a versatile management system capable of controlling orders. Therefore, this flow control provide more production by the company.

Keywords: Vehicles; Accessories-Parts car; Management System.

##




## CAPÍTULO I

*VISÃO INICIAL*
 
**1. INTRODUÇÃO**

O mercado de reposição de auto-peças foi estruturado para poder atender aos proprietários de automóveis com qualidade. Existem alguns modelos de mercado, tais como o modelo americano, brasileiro e europeu. Eles apresentam estrutura de cadeia de negócios bem distinta uma das outras. O mercado americano prefere uma idéia conhecida como "Do it yourself", ou seja, "faça você mesmo", essa cultura fez surgir algumas marcas de venda de peças fazendo com que as oficinas mecânicas perdessem espaço. Tratando-se do modelo europeu e brasileiro, o conceito de manutenção preventiva é bem mais difundido.

**2. Contextualização**

A partir dessa visão de mercado foi possível garantir aos consumidores a liberdade de escolher onde reparar e fazer manutenção preventiva dos seus veículos, assim, a decisão pode ser tomada levando em consideração a confiança, o preço e a qualidade do serviço prestado.

**3. Problemática**

Devido a necessidade de produtos para atender a região na qual a auto peças está inserida, é importante ter controle de estoque a fim de aumentar a produtividade do local. Voltando a problemática, algumas auto-peças demonstram não possuir algum sistema de controle, fazendo com que a produção seja demorada por necessidade de verificar a disponibilidade de alguma peça, ou algum outro material.

**4. Solução Proposta**

A solução é um sistema gerencial para que os funcionários, de forma dinâmica e eficiente, controle o fluxo de materiais, peças e ferramentas da oficina para que torne o ambiente mais produtivo. 

**5. O que se esperar**

Espera-se obter conhecimento do mercado, além do planejamento e desenvolvimento da empresa. A expectativa é que o negócio tenha êxito.

**6. Objetivo Geral**

O objetivo deste projeto é criar o sistema administrativo para melhorar a produtividade e aperfeiçoar o software diante de suas necessidades futuras.

**6.1 Objetivos Específicos**

Visando atender ao objetivo geral têm-se os seguintes objetivos específicos:
- Cadastrar;
- Controlar;
- Editar.

 **7. Estrutura do Projeto**
 
Este projeto foi dividido em oito capítulos, onde se tentou apresentar de forma objetiva a proposta do sistema de gestão.
- O Capítulo I está definindo o projeto;
- O Capítulo II especifica a metodologia aplicada;
- O Capítulo III detalha o Documento de Visão;
- O Capítulo IV discorre sobre a especificação do caso de uso;
- O Capítulo V possui uma análise da modelagem de dados;
- O Capítulo VI discorre sobre a prototipação do sistema;
- Ao final há a Conclusão, Referências Bibliográficas, Glossário Anexos e Apêndices.

----

## CAPÍTULO II

*METODOLOGIA APLICADA*

**1. Metodologia e Modelo de Desenvolvimento**

O projeto emprega a metodologia SCRUM. Scrum é uma metodologia ágil para gestão e planejamento de projetos de software.
Segundo Ken Schwaber e Jim Koplan, "não há o que não gostar no Scrum, porque é o que todos fazemos quando trabalhamos sob pressão". (Comunidade de Desenvolvimento Ágil do Brasil).

**2 Técnicas de Levantamento de Requisitos**

O projeto emprega a técnica Questionário.

**2.1 Entrevista**

*O que é?
	A entrevista é uma das técnicas tradicionais de levantamento de requisito.
*Como funciona?
 Convém que o entrevistador dê margem ao entrevistado para expor as suas idéias. É necessário ter um plano de entrevista para que não haja dispersão do assunto principal e a entrevista fique longa, deixando o entrevistado cansado e não produzindo bons resultados.

Entrevistado: Alexandre Dantas, trabalha em uma auto peças.
Pergunta 1: Você tem algum sistema de controle no seu trabalho?
R: Tem, mas é muito fraco, muito antigo e não há manutenção.

Pergunta 2: Você pagaria por um sistema?
R: Sim.

Pergunta 3: Quais os principais problemas enfrentados no gerenciamento de
estoque?
R: Quando falta peça, é necessário checar manualmente, não há um
controle.

Pergunta 4: O que a você gostaria que o sistema tivesse?
R: Valor de peça, quantidade de estoque, o produto mais comprado etc.

Pergunta 5: Quanto você pagaria?
R: Não sei.

Por que foi escolhida para este projeto?
Porque é simples de utilizar e produz bons resultados.

**3. Tecnologias em Geral**

Neste trabalho foram selecionados a linguagem de programação PHP e o banco de dados MySQL devido a produtividade e facilidade que a linguagem e o banco de dados fornecem.

Essas tecnologias são descritas detalhadamente nas seções a seguir.

**3.1. PHP**

O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma
linguagem de script open source de uso geral, muito utilizada, e especialmente
adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.
Bibliografia: http://php.net/manual/pt_BR/intro-whatis.php

tipos de dado
- funções
- operadores
- funções de agregação
- métodos de índice
- linguagens procedurais

Bibliografia: https://pt.wikipedia.org/wiki/MySQL

**4. Componentes de Hardware e Software utilizados no projeto**

Descrição do mínimo de hardware e software onde o projeto será armazenado.
Tabela 04 – Componentes de Hardware.
Componente	Descrição
	
Tabela 05 – Softwares Utilizados.
Componente	Descrição
	
**5. Motivação pelo uso da tecnologia escolhida**

Produtividade e facilidade para o desenvolvimento das regras de negócio, e por integrar um framework que tem um bom suporte e que é baseado no padrão MVC. 

**6. Análise de Mercado**

**6.1 Sistema Canal da peça**

Funcionalidades:
- Manter cliente
- Manter produto
- Gerar pedido
- Alterar produto

Preço variante.

Tecnologias:
- Java
- BD

**6.2 Sistema AutoParts Online**

Funcionalidades:
- Manter cliente
- Manter produto
- Gerar pedido
- Alterar produto

Preço variante.

Tecnologias:
- JavaScript
- Frameworks(JS)
- BD

**6.3 Sistema Jocar**

Funcionalidades:
- Manter cliente
- Manter produto
- Gerar pedido
- Alterar produto

Preço variante.

Tecnologias:
- ASP.NET
- BD

**7. Comparação de Sistemas Existentes**

Os 3 sistemas tem as funcionalidades citadas, sendo o meu sistema para controle de estoque e pedido de materiais. (Sistema interno)

*Tabela 01 – Comparação de Funcionalidades

|                                | SISTEMA Canal da peça    |      SISTEMA AutoParts Online    |      SISTEMA Jocar    |     O MEU    |
:-------------------------------:|:------------------------:|:--------------------------------:|:---------------------:|:-------------:
|      Manter Clientes           |           X              |                 X                |           X           |              |
|      Manter Produto            |           X              |                 X                |           X           |       X      |
|      Gerar Pedido              |           X              |                 X                |           X           |       X      |
|      Alterar Produto           |           X              |                 X                |           X           |       X      |
|      Manter Pedido             |                          |                                  |           X           |       X      |

Leia-se 'Possui' onde tem 'X' e 'Não possui' onde não tem nada.

*Tabela 02 – Comparação de Tecnologias

|            SISTEMAS            |    BANCO DE DADOS    |      Linguagem de Programação    |      Tipo    |
:-------------------------------:|:--------------------:|:--------------------------------:|:------------:|
|     SISTEMA Canal da peça      |           X          |                 X                |      WEB     |  
|     SISTEMA AutoParts Online   |           X          |                 X                |      WEB     |
|     SISTEMA Jocar              |           X          |                 X                |      WEB     |
|     O MEU                      |           X          |                 X                |      WEB     |   

**7.1 Vantagem na utilização do sistema**

O sistema trará produtividade ao estabelecimento, por meio do controle de estoque, e agilidade por meio de pedido online para reposição de materiais.

**8. Cronograma de Desenvolvimento**

As fases do projeto devem estar de acordo com o modelo de desenvolvimento selecionado na Seção 1.1 do Capítulo II.
Tabela 03 – Cronograma de Desenvolvimento do Projeto.
	2017
FASES DO PROJETO	Fev	Mar	Abr	Mai	Jun	Jul	Ago	Set	Out	Nov	Dez
Levantamento de Requisitos											
Entrevista											
Questionário											

Modelagem											
											
								
**9. Justificativa**

A criação desse projeto é necessária pois muitas auto-peças ainda não possuem sistema de gerenciamento de peças e materiais.
O fator motivador é a falta de produtividade e desorganização de algumas auto-peças.

## CAPÍTULO III

*VISÃO DO SISTEMA*

**1. Escopo**

O módulo ao qual este documento se refere tem como objetivo automatizar o trabalho no setor gerencial de pontos comerciais e logísticos onde ele estiver sendo utilizado. Dentre suas principais funcionalidades estão incluídas a de geração de pedidos para o setor gerencial, manter/alterar peças da loja e fornecer informações dos pontos de venda integrados a ele.

**2. Problemas**

Tabela 06 – Especificação do Problema.
O problema de	
Afeta	
Impacto	
Solução	

**3. Necessidades dos Interessados**

Tabela 07 – Necessidades dos Interessados.
Necessidade	Prioridade	Preocupações	Solução Atual	Soluções Propostas
Permitir o acesso e o gerenciamento das informações.	Alta	Manteras informações atualizadas.	N/A.	Ferramenta para cadastramento e gerenciamento das informações.

**4. Perspectiva do Produto**

O sistema disponibiliza leitura das peças e preço, realiza cadastro e alteração das peças com acesso restrito aos funcionários.

**5. Resumo das Capacidades do Produto**

Tabela 08 – Resumo das Capacidades do Produto.
Benefícios para o Cliente	Recursos do Sistema
Acesso simplificado às informações.
Maior agilidade nos processos operacionais;	Consultar, alterar e controlar os produtos por meio de um administrador.

**6. Características do Sistema**

Tabela 09 – Características do Projeto
Nº	Característica
	
**7. Riscos do Projeto**

Tabela 10 – Riscos do Projeto
Nº	Descrição do Risco	Classificação
		

**8. Restrições do Projeto**

Tabela 11 – Restrições do Projeto
Nº	Descrição da Restrição	Tipo
		

**9. Regras do Negócio**

Tabela 12 – Regras de Negócio.
Código	Nome	Descrição
RN001	Preenchimento obrigatório de código do funcionário e senha Para gerenciar o sistema realizando consultas e alterações, é necessário autenticar-se
RN002	Anexo de imagens dos produtos Ao cadastrar um produto, deve-se anexar uma imagem ao mesmo.

**10. Requisitos Funcionais**

Tabela 13 – Requisitos Funcionais.
Código	Nome	Descrição
RF001	Funcionalidades do caso de uso: Gerenciar Parecer	O caso de uso Gerenciar Parecer deverá permitir que o ator consulte e visualize o parecer, gere o parecer em formato PDF e XLS, bem como permita a impressão de etiquetas e processo.

**11. Requisitos Não Funcionais**

Tabela 14 – Requisitos Não Funcionais.
Código	Nome	Descrição
RNF001	Usabilidade	O sistema deve apresentar uma interface amigável, intuitiva e de fácil utilização, garantindo uma boa comunicação entre utilizador e sistema. As ações devem ser transparentes, de modo a que o utilizador compreenda todos os seus efeitos.

**12. Mensagens do Sistema**

Tabela 15 – Mensagens do Sistema.
Código	Descrição
MSG001	Dados obrigatórios não informados.
MSG002	Dados não localizados.
MSG003	CPF ou CNPJ preenchido incorretamente

**13. Lista de Casos de Uso**

Tabela 16 – Lista de Caso de Uso.
Código	Nome	Descrição
UC001	Gerenciar Parecer Técnico	Este caso de uso tem como finalidade a realização das consultas do Parecer Técnico feitas pelos Coordenadores de Análise dos órgãos do XXXXXX.

**14. Lista de Atores**

Tabela 17 – Lista de Atores.
Código	Nome	Descrição
001	<Identificação do ator>	

**15. Diagrama Geral de Caso de Uso**

Figura 03 – Diagrama Geral de Caso de Uso.

**16. Diagrama de Classe**

Figura 04 – Diagrama de Classe.

**17. Diagrama de Processo**

Figura 05 – Diagrama de Processo
