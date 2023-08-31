<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="body">
            <div class="containerBook mb-4">
                <div class="imgBook">
                    <!-- Link para chamar a imagem da amazon -->
                    <!-- <a href='linkDaImagem'><img src='nomeDaImagem' alt="sapiens"/></a> -->
                </div>
                <div class="bookDetails">
                    <h1 class="mb-0">Sapiens</h1>
                    <h4 class="mb-1 subtitleBook">Uma breve história da humanidade.</h4>
                    <div class="mb-3">
                        <p class="authorBook mb-3">por <b><a href="../autor.html">Yuval Noah Harari<i
                                    class="bi bi-arrow-right-short"></i></b>
                        </p>
                        </a>
                        <p class="editorBook">editora <b><a href="../editora.html">Editora Schwarcz SA<i
                                        class="bi bi-arrow-right-short"></i></a></b>
                        </p>
                    </div>
                    <hr>
                    <div class="bootstrapInline">
                        <div class="plataforms bootstrapInline">
                            <p><b>Disponível </b>em:</p>
                            <p>
                                <img src="../images/plataformas/amazon.svg" alt="imgAmazon">
                                <img src="../images/plataformas/appleBooks.png" alt="imgAppleBooks">
                            </p>
                        </div>
                        <div class="avaliations">
                            <div class="like mx-4">
                                <h3><i class="bi bi-heart"></i></h3>
                            </div>
                            <div class="stars mb-0">
                                <p class="mb-0">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </p>
                                <p class="mb-0">65 avaliações</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bookDescription mb-2">
                <h4>Descrição</h4>
                <p>Na nova edição do livro que conquistou milhões de leitores ao redor do mundo, Yuval Noah Harari
                    questiona tudo o que sabemos sobre a trajetória humana no planeta ao explorar quem somos, como
                    chegamos até aqui e por quais caminhos ainda poderemos seguir.</p>
                <p>O planeta Terra tem cerca de 4,5 bilhões de anos. Numa fração ínfima desse tempo, uma espécie entre
                    incontáveis outras o dominou: nós, humanos. Somos os animais mais evoluídos e mais destrutivos que
                    jamais viveram.
                    Sapiens é a obra-prima de Yuval Noah Harari e o consagrou como um dos pensadores mais brilhantes da
                    atualidade. Num feito surpreendente, que já fez deste livro um clássico contemporâneo, o historiador
                    israelense aplica uma fascinante narrativa histórica a todas as instâncias do percurso humano sobre
                    a Terra. Da Idade da Pedra ao Vale do Silício, temos aqui uma visão ampla e crítica da jornada em
                    que deixamos de ser meros símios para nos tornarmos os governantes do mundo.
                    Harari se vale de uma abordagem multidisciplinar que preenche as lacunas entre história, biologia,
                    filosofia e economia, e, com uma perspectiva macro e micro, analisa não apenas os grandes
                    acontecimentos, mas também as mudanças mais sutis notadas pelos indivíduos.</p>
            </div>
            <hr class="mb-2">
            <div class="bookInformations mb-4">
                <div class="informations">
                    <div class="information">
                        <p class="bold">Número de páginas</p>
                        <h3><i class="bi bi-book-half"></i></h3>
                        <p class="info">472 Páginas</p>
                    </div>
                    <div class="information">
                        <p class="bold">Data da publicação</p>
                        <h3><i class="bi bi-calendar-event"></i></h3>
                        <p class="info">13 novembro 2020</p>
                    </div>
                    <div class="information">
                        <p class="bold">Idioma</p>
                        <h3><i class="bi bi-globe-americas"></i></h3>
                        <p class="info">Português</p>
                    </div>
                    <div class="information">
                        <p class="bold">ISBN-10</p>
                        <h3><i class="bi bi-book-half"></i></h3>
                        <p class="info">8535933921</p>
                    </div>
                    <div class="information">
                        <p class="bold">ISBN-13</p>
                        <h3><i class="bi bi-book-half"></i></h3>
                        <p class="info">978-8535933925</p>
                    </div>
                </div>
            </div>
            <div class="container containerRecomendation mb-4">
                <div class="mx-5 mb-4">
                    <h4>Clientes que visualizaram este livro, também visualizaram</h4>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="20000000">
                            <div class="booksRecomendation">
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="../images/livros/subconsciente.jpeg" alt="">
                                        <p class="bold title mb-0">O poder subconsciente</p>
                                        <p class="subtitle mb-2">por Joseph Murphy - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <a href="./livros/sapiens.html"><img src="../images/livros/sapiens.jpeg"
                                                alt=""></a>
                                        <a href="./livros/sapiens.html">
                                            <p class="bold title mb-0">Sapiens</p>
                                        </a>
                                        <p class="subtitle mb-2">por Yuval Noah Harari - <i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="../images/livros/sherlock.webp" alt="">
                                        <p class="bold title mb-0">Sherlock Holmes</p>
                                        <p class="subtitle mb-2">por Arthur Conan Doyle - <i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="../images/livros/garota.jpeg" alt="">
                                        <p class="bold title mb-0">A garota do lago</p>
                                        <p class="subtitle mb-2">por Charlie Donlea - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="../images/livros/corvo.jpeg" alt="">
                                        <p class="bold title mb-0">O corvo e outros poemas</p>
                                        <p class="subtitle mb-2">por Edgar Allan Poe - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000000">
                            <div class="booksRecomendation">
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/subconsciente.jpeg" alt="">
                                        <p class="bold title mb-0">O poder subconsciente</p>
                                        <p class="subtitle mb-2">por Joseph Murphy - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/sapiens.jpeg" alt="">
                                        <p class="bold title mb-0">Sapiens</p>
                                        <p class="subtitle mb-2">por Yuval Noah Harari - <i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/sherlock.webp" alt="">
                                        <p class="bold title mb-0">Sherlock Holmes</p>
                                        <p class="subtitle mb-2">por Arthur Conan Doyle - <i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/garota.jpeg" alt="">
                                        <p class="bold title mb-0">A garota do lago</p>
                                        <p class="subtitle mb-2">por Charlie Donlea - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/corvo.jpeg" alt="">
                                        <p class="bold title mb-0">O corvo e outros poemas</p>
                                        <p class="subtitle mb-2">por Edgar Allan Poe - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000000">
                            <div class="booksRecomendation">
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/subconsciente.jpeg" alt="">
                                        <p class="bold title mb-0">O poder subconsciente</p>
                                        <p class="subtitle mb-2">por Joseph Murphy - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/sapiens.jpeg" alt="">
                                        <p class="bold title mb-0">Sapiens</p>
                                        <p class="subtitle mb-2">por Yuval Noah Harari - <i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/sherlock.webp" alt="">
                                        <p class="bold title mb-0">Sherlock Holmes</p>
                                        <p class="subtitle mb-2">por Arthur Conan Doyle - <i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/garota.jpeg" alt="">
                                        <p class="bold title mb-0">A garota do lago</p>
                                        <p class="subtitle mb-2">por Charlie Donlea - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                                <div class="shadow mb-4 rounded bookRecomendation">
                                    <div class="book">
                                        <img src="./images/livros/corvo.jpeg" alt="">
                                        <p class="bold title mb-0">O corvo e outros poemas</p>
                                        <p class="subtitle mb-2">por Edgar Allan Poe - <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
                                        <p><i class="bi bi-heart"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
</x-app-layout>
