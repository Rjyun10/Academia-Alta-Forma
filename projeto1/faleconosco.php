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
    <title>Academia Alta Forma | Fale Conosco</title>
  </head>
  <body>
    <?php include("includes/header.php");?>

    <main>
      <section
        class="section-fale-forms justify-content-center align-items-center d-flex"
        id="forms"
      >
        <div class="card p-4">
          <h3 class="mb-4 text-center">Fale Conosco</h3>
          <form action="">
            <div class="mb-3">
              <label for="nomeCompleto" class="form-label">Nome Completo</label>
              <input
                type="text"
                class="form-control"
                id="nomeCompleto"
                placeholder="Seu nome"
                required
              />
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Seu Email</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="seu.email@exemplo.com"
                aria-describedby="emailHelp"
                required
              />
              <div id="emailHelp" class="form-text">
                Não vamos compartilhar esse email com ninguém.
              </div>
            </div>

            <div class="mb-3">
              <label for="telefone" class="form-label"
                >Telefone / WhatsApp</label
              >
              <input
                type="tel"
                class="form-control"
                id="telefone"
                placeholder="(00) 00000-0000"
              />
            </div>

            <hr class="my-4" />

            <div class="mb-3">
              <label for="assunto" class="form-label"
                >Assunto / Motivo do Contato</label
              >
              <select class="form-select" id="assunto" required>
                <option value="" selected disabled>Selecione uma opção</option>
                <option value="suporte">Suporte Técnico</option>
                <option value="duvidas">Dúvidas sobre Produtos/Serviços</option>
                <option value="financeiro">Financeiro / Cobrança</option>
                <option value="reclamacoes">Reclamações ou Sugestões</option>
                <option value="parcerias">Parcerias / Comercial</option>
                <option value="teste">Treino Grátis</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="mensagem" class="form-label"
                >Mensagem / Descrição do Problema</label
              >
              <textarea
                class="form-control"
                id="mensagem"
                rows="4"
                placeholder="Descreva sua necessidade ou dúvida detalhadamente..."
                required
              ></textarea>
            </div>

            <!-- Seção 3: Encerramento e LGPD -->
            <div class="mb-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
                required
              />
              <label class="form-check-label" for="exampleCheck1"
                >Concordo com o tratamento dos meus dados conforme a
                LGPD.</label
              >
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
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
