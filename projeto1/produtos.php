<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      href="imagens/logo.png"
      sizes="32x32"
      type="image/png"
      class="favicon"
    />
    <style type="text/css">
      @import url(style.css);
    </style>
    <title>Academia Alta Forma | Nossos Produtos</title>
  </head>
  <body>
    <?php include("includes/header.php");?>

    <main>
      <section class="section-produtos-1" id="produtos">
        <div class="d-flex align-items-center justify-content-center pt-5">
          <h1 class="titulo text-center p-3">Nossos Produtos</h1>
        </div>
        <div
          class="row justify-content-center d-flex align-items-center m-0 p-5"
        >
          <div class="col-md-4">
            <a href="#suplementos" class="text-decoration-none">
              <div
                class="d-flex align-items-center justify-content-center pt-5"
              >
                <h1 class="titulo text-center p-3">Suplementos</h1>
              </div>
            </a>
            <a
              href="#suplementos"
              class="text-decoration-none text-center d-flex justify-content-center pt-5"
            >
              <img
                src="imagens/img-opcao1.png"
                alt="Opção Suplementos"
                class="img-fluid rounded-5 img-opcao"
              />
            </a>
          </div>
          <div class="col-md-4">
            <a href="#moda" class="text-decoration-none">
              <div
                class="d-flex align-items-center justify-content-center pt-5"
              >
                <h1 class="titulo text-center p-3">Moda</h1>
              </div>
            </a>
            <a
              href="#moda"
              class="text-decoration-none text-center d-flex justify-content-center pt-5"
            >
              <img
                src="imagens/img-opcao2.jpeg"
                alt="Opção Moda"
                class="img-fluid rounded-5 img-opcao"
              />
            </a>
          </div>
        </div>
      </section>
      <section class="section-produtos-2" id="suplementos">
        <div
          class="row d-flex justify-content-center align-items-center p-5 gap-5 m-0">
          <div class="col-md-3 m-2">
            <div class="card">
              <img
                src="imagens/growth-produtos.png"
                class="card-img-top"
                alt="Suplemento Growth"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Whey Protein Concentrado (80%) - Sabor Chocolate - 900g Growth
                  Supplements
                </h5>
                <p class="card-text">
                  Com 80% de concentração proteica, o
                  <strong>Whey Concentrado de Chocolate da Growth</strong> une
                  alta performance e sabor irresistível. Rico em BCAAs e
                  aminoácidos essenciais, é o suplemento ideal para otimizar sua
                  recuperação, ganho de massa magra e complementar a dieta com
                  muito prazer.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoGrowth">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoGrowth" tabindex="-1" aria-labelledby="modalDetProdutoGrowthLabel" aria-hidden="true">
                  <!-- Adicionado 'modal-lg' para deixar o modal maior em desktops e mantido 'modal-dialog-centered' -->
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoGrowthLabel">Whey Protein Concentrado 80% - 900g | Growth Supplements</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/growth-produtos.png" class="img-fluid rounded" alt="Whey Protein Growth Chocolate">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 1 | Categoria: Whey Protein</span>
                            <h3 class="text-success mt-2">R$ 164,90</h3>
                            
                            <!-- Informações detalhadas adicionadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques Nutricionais:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li><strong>24g de proteína</strong> por porção (30g).</li>
                              <li>Alto teor de <strong>BCAAs</strong> (Leucina, Isoleucina e Valina).</li>
                              <li>Baixo teor de carboidratos e gorduras.</li>
                              <li>Excelente solubilidade e sabor marcante de chocolate.</li>
                              <li>Matéria-prima importada de altíssima qualidade.</li>
                              <li><strong>Após aberto, consumir <span class="text-danger"> em até 60 dias </span>. Após o consumo, manter a embalagem devidamente fechada.</strong></li>
                            </ul>

                            <p class="small text-muted mb-3">
                              <strong>Sugestão de uso:</strong> Dissolver 2 medidas (30g) em 200ml de água ou bebida de sua preferência após o treino ou conforme orientação profissional.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="https://www.gsuplementos.com.br/whey-protein-concentrado-1kg-growth-supplements-p985936" target="_blank" class="btn btn-detalhes w-100 mb-2">Ver na Loja Oficial</a>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-2">
            <div class="card">
              <img
                src="imagens/nutrify-produtos.png"
                class="card-img-top"
                alt="Suplemento NUTRIFY"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Collagen Pro BodyBalance (450g) - Nutrify
                </h5>
                <p class="card-text">
                  O <strong>Collagen Pro da Nutrify</strong> combina peptídeos
                  bioativos de colágeno BodyBalance com alta tecnologia
                  nutricional para auxiliar na manutenção da massa magra,
                  firmeza da pele e saúde articular. Uma fórmula limpa, de
                  excelente absorção e ideal para potencializar seus resultados
                  diários com praticidade.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoNutrify">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoNutrify" tabindex="-1" aria-labelledby="modalDetProdutoNutrifyLabel" aria-hidden="true">
                  <!-- Adicionado 'modal-lg' para deixar o modal maior em desktops e mantido 'modal-dialog-centered' -->
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoNutrifyLabel">Collagen Pro BodyBalance (450g) - Nutrify</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/nutrify-produtos.png" class="img-fluid rounded" alt="Collagen Pro Nutrify">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 2 | Categoria: Colágeno</span>
                            <h3 class="text-success mt-2">R$ 219,90</h3>
                            
                            <!-- Informações detalhadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques Nutricionais:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Contém peptídeos bioativos de colágeno <strong>BodyBalance</strong>.</li>
                              <li>Auxilia na manutenção e no ganho de massa magra.</li>
                              <li>Contribui para a firmeza e elasticidade da pele.</li>
                              <li>Fortalecimento de articulações, unhas e cabelos.</li>
                              <li>Fórmula limpa (clean label), sem adição de açúcares.</li>
                              <li><strong>Após aberto, consumir <span class="text-danger">em até 30 dias</span>. Manter a embalagem bem fechada em local seco e fresco.</strong></li>
                            </ul>

                            <p class="small text-muted mb-3">
                              <strong>Sugestão de uso:</strong> Diluir 25g (3 medidores) em 200ml de água ou bebida de sua preferência, consumindo uma vez ao dia ou conforme orientação de profissional.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="https://www.nutrify.com.br/collagen-pro/p?skuId=1001745" target="_blank" class="btn btn-detalhes w-100 mb-2">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-2">
            <div class="card">
              <img
                src="imagens/wvegan-produtos.png"
                class="card-img-top"
                alt="Suplemento Wvegan"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Proteína Vegetal Isolada de Ervilha e Arroz Sabor Baunilha
                  (900g) - WVegan
                </h5>
                <p class="card-text">
                  O <strong>Protein Blend da WVegan</strong> une proteínas
                  isoladas de ervilha e arroz para entregar um perfil completo
                  de aminoácidos essenciais. Com 900g e um suave sabor de
                  baunilha, é a escolha perfeita para quem busca nutrição limpa,
                  excelente cremosidade e suporte ideal para o ganho de massa
                  muscular de forma 100% vegetal.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoWVegan">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoWVegan" tabindex="-1" aria-labelledby="modalDetProdutoWVeganLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoWVeganLabel">Proteína Vegetal Isolada Sabor Baunilha (900g) - WVegan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/wvegan-produtos.png" class="img-fluid rounded" alt="Proteína Vegetal WVegan Baunilha">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 3 | Categoria: Proteína Vegetal</span>
                            <h3 class="text-success mt-2">R$ 359,90</h3>
                            
                            <!-- Informações detalhadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques Nutricionais:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Combinação de proteína isolada de <strong>ervilha e arroz</strong>.</li>
                              <li>Perfil completo de aminoácidos essenciais para recuperação muscular.</li>
                              <li>Produto 100% vegano, sem ingredientes de origem animal.</li>
                              <li>Livre de lactose, soja e glúten.</li>
                              <li>Excelente cremosidade e sabor natural de baunilha.</li>
                              <li><strong>Após aberto, consumir <span class="text-danger">em até 30 dias</span>. Manter a embalagem bem fechada em local seco e fresco.</strong></li>
                            </ul>

                            <p class="small text-muted mb-3">
                              <strong>Sugestão de uso:</strong> Misturar 50g (2 medidores) em 300ml de água ou bebida vegetal de sua preferência, agitando bem até total dissolução.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="https://www.wvegan.com.br/produto/combo-2-rice-protein-premium-900g-wvegan/" target="_blank" class="btn btn-detalhes w-100 mb-2">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-2">
            <div class="card">
              <img
                src="imagens/essential-produtos.png"
                class="card-img-top"
                alt="Suplemento Essential Nutrition"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Cacao Protein Proteína Vegetal Sabor Cacau (450g) - Essential
                  Nutrition
                </h5>
                <p class="card-text">
                  O <strong>Cacao Protein da Essential Nutrition</strong> é um
                  suplemento de proteína vegetal de alta qualidade, limpo e de
                  excelente digestibilidade. Com o sabor marcante do cacau puro,
                  ele combina proteínas vegetais isoladas para oferecer uma
                  nutrição completa e saborosa.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoEssential">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoEssential" tabindex="-1" aria-labelledby="modalDetProdutoEssentialLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoEssentialLabel">Cacao Protein Proteína Vegetal Sabor Cacau (450g) - Essential Nutrition</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/essential-produtos.png" class="img-fluid rounded" alt="Cacao Protein Essential Nutrition">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 4 | Categoria: Whey Protein</span>
                            <h3 class="text-success mt-2">R$ 514,90</h3>
                            
                            <!-- Informações detalhadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques Nutricionais:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Proteína vegetal de alta qualidade e excelente digestibilidade.</li>
                              <li>Sabor marcante e sofisticado de <strong>cacau puro</strong>.</li>
                              <li>Fórmula limpa (clean label), sem adição de açúcares refinados.</li>
                              <li>Livre de glúten, lactose e aditivos artificiais.</li>
                              <li>Ideal para complementar dietas saudáveis e veganas.</li>
                              <li><strong>Após aberto, consumir <span class="text-danger">em até 60 dias</span>. Manter a embalagem bem fechada em local seco e fresco.</strong></li>
                            </ul>

                            <p class="small text-muted mb-3">
                              <strong>Sugestão de uso:</strong> Adicionar 28g (1 medidor) em cerca de 200ml de água ou bebida de sua preferência, misturando até total homogeneização.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="https://www.essentialnutrition.com.br/cacao-whey-protein-chocolate-30-doses" target="_blank" class="btn btn-detalhes w-100 mb-2">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-2">
            <div class="card">
              <img
                src="imagens/athletica-produtos.png"
                class="card-img-top"
                alt="Suplemento Atlhetica Nutrition"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Best Whey Chocolate 900g - Atlhetica Nutrition
                </h5>
                <p class="card-text">
                  O <strong>Best Whey da Atlhetica Nutrition</strong> é um
                  suplemento de 100% Whey Protein de excelente qualidade,
                  reconhecido pelo sabor incomparável e cremosidade única. Ideal
                  para quem busca ganho de massa muscular e recuperação
                  pós-treino eficiente, ele combina proteínas concentrada,
                  isolada e hidrolisada em uma fórmula de alto valor biológico.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoBestWhey">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoBestWhey" tabindex="-1" aria-labelledby="modalDetProdutoBestWheyLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoBestWheyLabel">Best Whey Chocolate (900g) - Atlhetica Nutrition</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/athletica-produtos.png" class="img-fluid rounded" alt="Best Whey Atlhetica Nutrition">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 5 | Categoria: Whey Protein</span>
                            <h3 class="text-success mt-2">R$ 289,90</h3>
                            
                            <!-- Informações detalhadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques Nutricionais:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Blend de proteínas: WPC, WPI e WPH (Concentrada, Isolada e Hidrolisada).</li>
                              <li>Excelente cremosidade e sabor incomparável de chocolate.</li>
                              <li>Alto valor biológico para ganho de massa muscular e recuperação.</li>
                              <li>Baixo teor de sódio e carboidratos por porção.</li>
                              <li><strong>Após aberto, consumir <span class="text-danger">em até 30 dias</span>. Manter a embalagem bem fechada em local seco e fresco.</strong></li>
                            </ul>

                            <p class="small text-muted mb-3">
                              <strong>Sugestão de uso:</strong> Adicionar 2 dosadores cheios (40g) em 200ml de água ou bebida de sua preferência, agitando até total dissolução.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="https://www.atlheticanutrition.com.br/best-whey-protein-double-chocolate/p?skuId=2661" target="_blank" class="btn btn-detalhes w-100 mb-2">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-produtos-3" id="moda">
        <div
          class="row d-flex justify-content-center align-items-center p-5 gap-5 m-0">
          <div class="col-md-3 m-2">
            <div class="card">
              <img src="imagens/produto-moda-1.png" alt="Leggings de Compressão Sem Costura Premium" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Leggings Seamless High-Waisted
                </h5>
                <p class="card-text">
                  Desenvolvida com tecnologia de ponta e materiais sustentáveis, esta jaqueta corta-vento une alta performance e consciência ecológica. Seu tecido técnico super leve oferece proteção avançada contra correntes de ar e intempéries, garantindo o máximo de conforto térmico, respirabilidade e liberdade de movimentos durante suas trilhas, corridas ou composições de estilo casual esportivo.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoModa1">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoModa1" tabindex="-1" aria-labelledby="modalDetProdutoModa1Label" aria-hidden="true">
                  <!-- Adicionado 'modal-lg' para deixar o modal maior em desktops e mantido 'modal-dialog-centered' -->
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoModa1Label">Leggings de Compressão Sem Costura Premium</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/produto-moda-1.png" class="img-fluid rounded" alt="Leggings de Compressão Premium">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 1 | Categoria: Moda Fitness & Athleisure</span>
                            <h3 class="text-success mt-2">R$ 74,90</h3>
                            
                            <!-- Informações detalhadas adicionadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Tecnologia sem costuras laterais para zero atrito</li>
                              <li>Efeito modelador (*shapewear*) que valoriza a silhueta</li>
                              <li>Cintura alta para suporte abdominal reforçado</li>
                              <li>Tecido fosco de toque ultra macio e aconchegante</li>
                              <li>Sensação de segunda pele com alta respirabilidade</li>
                              <li>Design minimalista em cores neutras e sofisticadas</li>
                            </ul>

                            <p class="small text-muted mb-3">
                              Desenvolvida para transitar perfeitamente entre os treinos mais intensos e o conforto do dia a dia, unindo estética de luxo e alta performance.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="#" target="_blank" class="btn btn-detalhes w-100 mb-2 disabled" tabindex="-1" aria-disabled="true">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-2">
            <div class="card">
              <img src="imagens/produto-moda-2.png" alt="Jaqueta Corta-Vento Reciclada Premium" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Jaqueta Corta-Vento Premium
                </h5>
                <p class="card-text">
                  Projetada para elevar sua performance e autoestima, esta legging combina a tecnologia seamless (sem costuras) com uma compressão inteligente que molda a silhueta de forma natural. Com toque ultra macio, efeito segunda pele e cintura alta de suporte reforçado, ela elimina o atrito com a pele e transita perfeitamente entre os treinos mais intensos e o conforto do seu dia a dia.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoModa2">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoModa2" tabindex="-1" aria-labelledby="modalDetProdutoModa2Label" aria-hidden="true">
                  <!-- Adicionado 'modal-lg' para deixar o modal maior em desktops e mantido 'modal-dialog-centered' -->
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoModa2Label">Jaqueta Corta-Vento Reciclada Premium</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/produto-moda-2.png" class="img-fluid rounded" alt="Jaqueta Corta-Vento Premium">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 2 | Categoria: Esporte & Aventura</span>
                            <h3 class="text-success mt-2">R$ 99,90</h3>
                            
                            <!-- Informações detalhadas adicionadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Material sustentável de alta qualidade (reciclado)</li>
                              <li>Tecido técnico extremamente leve</li>
                              <li>Estilo atlético moderno e versátil</li>
                              <li>Alta resistência ao vento</li>
                              <li>Conforto térmico ideal para atividades ao ar livre</li>
                              <li>Design focado em mobilidade dinâmica</li>
                            </ul>

                            <p class="small text-muted mb-3">
                              Desenvolvida com foco em sustentabilidade e performance avançada. Perfeita para trilhas, corridas e composições de estilo casual esportivo.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="#" target="_blank" class="btn btn-detalhes w-100 mb-2 disabled" tabindex="-1" aria-disabled="true">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-2">
            <div class="card">
              <img src="imagens/produto-moda-3.png" alt="Calça Jogger de Alfaiataria Esportiva Premium" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  Calça Jogger Athleisure
                </h5>
                <p class="card-text">
                  O encontro definitivo entre a elegância da alfaiataria clássica e a flexibilidade do vestuário esportivo. Esta calça jogger foi criada para a rotina dinâmica de quem precisa de versatilidade, contando com um tecido elástico de alta respirabilidade, caimento impecável e um design moderno que garante sofisticação e conforto absoluto em qualquer ambiente.
                </p>
                <button type="button" class="btn btn-detalhes mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetProdutoModa3">
                  Ver detalhes
                </button>
                <div class="modal fade" id="modalDetProdutoModa3" tabindex="-1" aria-labelledby="modalDetProdutoModa3Label" aria-hidden="true">
                  <!-- Adicionado 'modal-lg' para deixar o modal maior em desktops e mantido 'modal-dialog-centered' -->
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDetProdutoModa3Label">Calça Jogger de Alfaiataria Esportiva Premium</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <!-- Coluna da Esquerda: Imagens -->
                          <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="imagens/produto-moda-3.png" class="img-fluid rounded" alt="Calça Jogger Athleisure">
                          </div>
                          <!-- Coluna da Direita: Informações e Ações -->
                          <div class="col-md-6 d-flex flex-column">
                            <span class="text-muted">Código: 3 | Categoria: Urban Athleisure</span>
                            <h3 class="text-success mt-2">R$ 114,90</h3>
                            
                            <!-- Informações detalhadas adicionadas -->
                            <hr class="my-2">
                            <p class="mb-2"><strong>Destaques:</strong></p>
                            <ul class="small text-muted ps-3 mb-3">
                              <li>Corte de alfaiataria com caimento elegante e moderno</li>
                              <li>Tecido elástico de alta tecnologia e respirabilidade</li>
                              <li>Design versátil para transição entre o trabalho e o lazer</li>
                              <li>Toque macio e caimento impecável</li>
                              <li>Liberdade total de movimentos para rotinas dinâmicas</li>
                              <li>Estética de luxo voltada para o conceito *athleisure*</li>
                            </ul>

                            <p class="small text-muted mb-3">
                              Projetada especialmente para profissionais que buscam elegância no ambiente de negócios sem abrir mão da praticidade e do conforto do universo esportivo.
                            </p>
                            
                            <!-- Ações -->
                            <div class="mt-auto">
                              <a href="#" target="_blank" class="btn btn-detalhes w-100 mb-2 disabled" tabindex="-1" aria-disabled="true">Ver na Loja Oficial</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include("includes/footer.php");?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
