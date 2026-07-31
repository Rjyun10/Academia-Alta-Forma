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
          class="row d-flex justify-content-center align-items-center p-5 gap-5 m-0"
        >
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
                <a href="#" class="btn btn-detalhes mt-auto">Ver detalhes</a>
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
                <a href="#" class="btn btn-detalhes mt-auto">Ver detalhes </a>
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
                <a href="#" class="btn btn-detalhes mt-auto">Ver detalhes</a>
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
                <a href="#" class="btn btn-detalhes mt-auto">Ver detalhes</a>
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
                <a href="#" class="btn btn-detalhes mt-auto">Ver detalhes</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-produtos-3" id="moda"></section>
    </main>
    <?php include("includes/footer.php");?>

  </body>
</html>
