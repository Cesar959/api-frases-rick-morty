<?php


namespace Model;

Class Dados
{
    private $frases;


    public function __construct()
     {
        $this->frases = [
            ["id" => 1, "frase" => "A vida é feita de pequenas concessões", "Autor" => "Rick"],
            ["id" => 2, "frase" => "É possível que tenhamos estabelecido relações entre algumas coisas que não estavam relacionadas", "Autor" => "Jerry"],
            ["id" => 3, "frase" => "Às vezes a ciência é mais arte do que ciência, Morty", "Autor" => "Rick"],
            ["id" => 4, "frase" => "Quando pessoas inteligentes são felizes, elas param de se reconhecer", "Autor" => "Rick"],
            ["id" => 5, "frase" => "Todos os hospitais têm um médico que diz ser o melhor médico de toda a galáxia", "Autor" => "Rick"],
            ["id" => 6, "frase" => "Não aguento mais! Prefiro respirar veneno do que passar mais um minuto morando com você!", "Autor" => "Morty Jr"],
            ["id" => 7, "frase" => "Ah, então agora devemos dormir todas as noites? Você está ciente de que a noite é como metade do tempo todo?", "Rick" => "autor"],
            ["id" => 8, "frase" => "E a realidade em que Hitler curou o câncer, Morty? A resposta é: não pense sobre isso", "Autor" => "Rick"],
            ["id" => 9, "frase" => "Pode ser que ele coma cérebros e exale AIDS espacial", "Autor" => "Rick"],
            ["id" => 10,"frase" =>  "Ótimo, agora eu tenho que dominar um planeta inteiro pelos seus seios estúpidos","Autor" =>  "Rick"],
            ["id" => 11,"frase" =>  "Por amizade, por amor e pela minha maior aventura que ainda está por vir … aberta a outros", "Autor" =>  "Rick"],
            ["id" => 12,"frase" =>  "Não toque nisso, está além do seu entendimento", "Autor" =>  "Rick"],
            ["id" => 13,"frase" =>  "Você sabe qual é a melhor coisa que você pode fazer pelas pessoas que dependem de você? Seja honesto com eles, isso significa até liberá-los", "Autor" =>  "Mr. Meeseeks"],
            ["id" => 14,"frase" =>  "Muitas pessoas pagariam um bom dinheiro para dizimar a população. E só aceitarei a oferta mais alta", "Autor" =>  "Poncho"],
            ["id" => 15,"frase" =>  "Ruben teve anos muito difíceis, Morty. Não se concorda simplesmente em construir um parque temático dentro de si, se sua vida está indo bem", "Autor" =>  "Rick"],
            ["id" => 16,"frase" =>  "Os pensamentos incontroláveis ​​de mutilação e assédio sexual estão ao meu redor todos os dias, mas canalizo tudo isso através do meu trabalho", "Autor" =>  "Brad Anderson"],
            ["id" => 17,"frase" =>  "Você ainda acha que é uma boa ideia passar por buracos sem ter um pênis?", "Autor" =>  "Rick"],
            ["id" => 18,"frase" =>  "Você quer que eu te mostre minhas contas? Você é o cientista ou o garoto que queria ir para a cama?", "Autor" =>  "Rick"],
            ["id" => 19,"frase" =>  "N Quando duas pessoas criam uma vida juntas, deixam de lado suas vidas anteriores como indivíduos.", "Autor" =>  "Beth"],
            ["id" => 20,"frase" =>  "Quando você percebe que nada importa, o universo é seu", "Autor" =>  "Rick"],
            ["id" => 21,"frase" =>  "Abra suas mãos do seu Ding-dong! É a única maneira de conversarmos livremente!", "Autor" =>  "Rick"],
            ["id" => 22,"frase" =>  "Me ligue, me lamba, lamba minhas bolas!", "Autor" =>  "Rick"],
            ["id" => 23,"frase" =>  "Eu abandonei a escola, não é um lugar para pessoas inteligentes.", "Autor" =>  "Zeep"],
            ["id" => 24,"frase" =>  "Ouça-me, Morty. Eu sei que novas situações podem ser intimidadoras. Você olha em volta e é assustador e diferente. Mas você sabe, quando você os enfrenta com a cabeça erguida, batendo-os como um touro, é quando crescemos como pessoas", "Autor" =>  "Rick"],
            ["id" => 25,"frase" =>  "Você sabe o que, Morty? Tudo isso foi um teste. Um teste muito complexo para torná-lo uma pessoa mais assertiva", "Autor" =>  "Rick"],
            ["id" => 26,"frase" =>  "Há vantagens e desvantagens para cada linha do tempo alternativa. Alguns fatos curiosos sobre isso: ele tem aranhas gigantes telepáticas, onze ataques em 11 de setembro e o melhor sorvete do multiverso", "Autor" =>  "Rick"],
            ["id" => 27,"frase" =>  "É realmente estranho. Mas está prestes a ficar ainda mais estranho, Morty", "Autor" =>  "Rick"],
            ["id" => 28,"frase" =>  "Você tem um planeta completo gerando eletricidade para você? Isso é escravidão!", "Autor" =>  "Morty"],
            ["id" => 29,"frase" =>  "Especializar-se em civismo foi seu erro, não nos castigue por isso", "Autor" =>  "Mãe"],
            ["id" => 30,"frase" =>  "Eu queria que essa espingarda fosse meu pênis", "Autor" =>  "Jerry"],
            ["id" => 31,"frase" =>  "A mente adolescente é seu pior inimigo", "Autor" =>  "Rick"],
            ["id" => 32,"frase" =>  "Você é jovem, tem uma vida pela frente e sua cavidade anal ainda é firme, mas maleável. Faça isso pelo seu avô, Morty. Você tem que colocar essas sementes dentro da sua bunda", "Autor" =>  "Rick"],
            ["id" => 32,"frase" =>  "Farto de todas essas aventuras loucas! Isso foi muito traumático!", "Autor" =>  "Morty"],
            ["id" => 33,"frase" =>  "Vou voltar ao inferno, onde todo mundo pensa que eu sou inteligente e engraçado.", "Autor" =>  "O diabo"],
            ["id" => 34,"frase" =>  "Morty, você sabe o que a frase “wubba lubba dub dub” significa? Pássaro -Person.
            -Oh, é bobagem que Rick diz. -Morty.
            – Eles não são bobagens. Na minha língua, significa: “Estou com muita dor, por favor me ajude”. Pássaro -Person.", "Autor" =>  "Person"],
            ["id" => 35,"frase" =>  "Não existe Deus, verão. Você precisa conhecer a verdade crua, mesmo que doa. Você me agradecerá mais tarde", "Autor" =>  "Rick"],
            ["id" => 36,"frase" =>  "Nem todos os espaços vazios podem ser preenchidos com suco de Jumba.", "Autor" =>  "Mr. Goldenfold"],
            ["id" => 37,"frase" =>  "Vender uma arma é o mesmo que puxar o gatilho", "Autor" =>  "Morty"],
            ["id" => 38,"frase" =>  "Se você passa o dia todo misturando as palavras, pode fazer tudo parecer ruim, Morty", "Autor" =>  "Rick"],
            ["id" => 39,"frase" =>  "Aí está o meu túmulo. Em uma de nossas aventuras, Rick e eu basicamente destruímos o mundo, então escapamos dessa realidade e chegamos a ela, porque não foi destruída e estávamos mortos", "Autor" =>  "Morty"],
            ["id" => 40,"frase" =>  "Corra, Morty! Esse bastardo está disposto a arriscar tudo para me derrotar! Ele é completamente louco! Rick.", "Autor" =>  "Rick"],
            ["id" => 41,"frase" =>  "Por que você não pergunta às pessoas mais inteligentes do universo, Jerry? Oh sim, você está certo, eles explodiram", "Autor" =>  "Rick"],
            ["id" => 42,"frase" =>  "O louva-a-deus é o oposto dos ratos do campo, Morty. Eles decapitam e comem seus parceiros após o acasalamento. Afinal, o amor não existe", "Autor" =>  "Rick"],
            ["id" => 43,"frase" =>  "Os pais são simplesmente filhos que têm mais filhos", "Autor" =>  "Morty"],
            ["id" => 44,"frase" =>  "Agora eu não posso sair! Todo mundo me odeia!", "Autor" =>  "Jerry"],
            ["id" => 45,"frase" =>  "Isso é planejar o fracasso, Morty. É ainda mais tolo que o planejamento regular", "Autor" =>  "Rick"],
            ["id" => 46,"frase" =>  "Acho que sou simplesmente o papel higiênico de toda a família", "Autor" =>  "Jerry"],
            ["id" => 47,"frase" =>  "Você vê, a escola não é um lugar para pessoas inteligentes Jerry. Sei que essa não é uma opinião popular, mas essa é minha humilde opinião sobre o assunto", "Autor" =>  "Rick"],
            ["id" => 48,"frase" =>  "Tenho notícias Morty, a escola é uma perda de tempo, são muitas pessoas problemáticas e então alguém se levanta e diz 2 + 2, você come um sanduíche e alguém lhe dá um pedaço de papel que diz que você pode ir ao banheiro. Não é um lugar para pessoas inteligentes", "Autor" =>  "Rick"],
            ["id" => 49,"frase" =>  "Toda a minha vida tem sido uma mentira! Deus está morto! O governo é uma farsa! Ação de Graças é sobre matar índios! Jesus não nasceu no Natal. Eles mudaram a data, foi uma celebração pagã!", "Autor" =>  "Morty Jr"],
            ["id" => 50,"frase" =>  "Isso é loucura. A montanha do baço? Catarata da bexiga? Os piratas do pâncreas?", "Autor" =>  "Morty"],
            ["id" => 51,"frase" =>  "Estou tentando consertar a arma de criação de portal com partes de uma boneca sexual e tenho que fazê-lo com apenas uma mão!", "Autor" =>  "Rick"],
            ["id" => 52,"frase" =>  "Gonorréia não pode nos ver se não nos mexermos. Espere, eu estou errado. Eu estava pensando em um T. Rex.", "Autor" =>  "Dr. Bloom"],
            ["id" => 53,"frase" =>  "O casamento é basicamente funeral com um bolo", "Autor" =>  "Rick"],
            ["id" => 54,"frase" =>  "Olha, eu não sou o cara mais legal do universo porque sou o mais inteligente. E ser legal é algo que as pessoas estúpidas fazem para melhorar suas chances", "Autor" =>  "Rick"],
            ["id" => 55,"frase" =>  "Nada do que você acha que importa", "Autor" =>  "Rick"],
            ["id" => 56,"frase" =>  "O truque é fazer as pessoas pensarem que tiveram a ideia", "Autor" =>  "Morty"],
            ["id" => 57,"frase" =>  "Eu concordo com isso. Seja bom, Morty. Seja melhor que eu", "Autor" =>  "Rick"],
            ["id" => 58,"frase" =>  "Olhe para Morty, odeio dizer, mas o que as pessoas chamam de “amor” nada mais é do que uma reação química que força os animais a se reproduzirem. Bata com força, Morty, mas lentamente se dissipe, deixando-o preso em um casamento fracassado. Aconteceu comigo … Quebre o ciclo", "Autor" =>  "Rick"],
            ["id" => 59,"frase" =>  "Você é o pior, seus deuses são uma mentira. Para o inferno com você, para o inferno com a natureza, para o inferno com árvores!", "Autor" =>  "Morty"],
            ["id" => 60,"frase" =>  "Como você se sente sobre todas as pessoas que estão sendo mortas hoje por causa de suas decisões? ", "Autor" =>  "Rick"],
            ["id" => 61,"frase" =>  "Muito bem, Morty! O aluno tornou-se professor", "Autor" =>  "Rick"],
        ];
     }

    public function frasesListadas()
    {
        return $this->frases;
    }

}