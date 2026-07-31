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
    <title>Academia Alta Forma | Nossos Serviços</title>
  </head>
  <body>
    <?php include("includes/header.php");?>

    <main>
      <section class="section-servico-1" id="nossos-servicos">
        <div class="d-flex align-items-center justify-content-center pt-5">
          <h1 class="titulo text-center p-3">Nossos Serviços</h1>
        </div>
        <div class="row d-flex justify-content-center text-center pt-3 m-0">
          <div class="col-md-4">
            <h2 class="fs-2">
              <a href="servico.php#musculacao" class="texto-servico"
                >Musculação</a
              >
            </h2>
            <a href="servico.php#musculacao" class=""
              ><img
                src="imagens/servico-musculacao-secao1.jpg"
                alt=""
                class="img-fluid img-servicos rounded-5"
            /></a>
          </div>
          <div class="col-md-4">
            <h2 class="fs-2">
              <a href="servico.php#crossfit" class="texto-servico">Crossfit</a>
            </h2>
            <a href="servico.php#crossfit" class=""
              ><img
                src="imagens/servico-crossfit-secao1.jpg"
                alt=""
                class="img-fluid img-servicos rounded-5"
            /></a>
          </div>
        </div>
        <div class="row d-flex justify-content-center text-center pt-3 m-0">
          <div class="col-md-4">
            <h2 class="fs-2">
              <a href="servico.php#pilates" class="texto-servico">Pilates</a>
            </h2>
            <a href="servico.php#pilates" class=""
              ><img
                src="imagens/servico-pilates-secao1.jpg"
                alt=""
                class="img-fluid img-servicos rounded-5"
            /></a>
          </div>
          <div class="col-md-4">
            <h2 class="fs-2">
              <a href="servico.php#zumba" class="texto-servico">Zumba</a>
            </h2>
            <a href="servico.php#zumba" class=""
              ><img
                src="imagens/servico-zumba-secao1.png"
                alt=""
                class="img-fluid img-servicos rounded-5"
            /></a>
          </div>
        </div>
      </section>

      <section class="section-servico-2" id="musculacao">
        <div class="d-flex align-items-center justify-content-center pt-5">
          <h1 class="titulo text-center p-3">Musculação</h1>
        </div>
        <div class="row justify-content-center text-center pt-5 m-0">
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-end">
                <li class="list-group-item">Ganho de massa muscular</li>
                <li class="list-group-item">Aumento da força física</li>
                <li class="list-group-item">Queima de gordura</li>
                <li class="list-group-item">Saúde cardiovascular</li>
              </ul>
            </div>
          </div>
          <div class="col-md-auto pt-5">
            <img
              src="imagens/servico-musculacao-secao1.jpg"
              alt=""
              class="img-fluid img-servicos rounded-5 m-2"
            />
          </div>
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-start">
                <li class="list-group-item">Fortalece articulações</li>
                <li class="list-group-item">Mais disposição e energia</li>
                <li class="list-group-item">Autoestima e bem-estar</li>
                <!-- Tópico "Saiba mais" que aciona o modal -->
                <li class="list-group-item">
                  <button
                    type="button"
                    class="btn text-decoration-none p-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalMusculacao"
                  >
                    Mini Guia ➤
                  </button>
                </li>
              </ul>
            </div>

            <!-- Modal (Card que abre por cima de tudo) -->
          <div
            class="modal fade"
            id="modalMusculacao"
            tabindex="-1"
            aria-labelledby="modalMusculacaoLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content shadow">
                <div class="modal-header bg-dark text-white">
                  <h5 class="modal-title" id="modalMusculacaoLabel">
                    Guia Definitivo para o Treino Ideal de Musculação
                  </h5>
                  <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                    aria-label="Fechar"
                  ></button>
                </div>
                <div class="modal-body">
                  
                  <h6 class="fw-bold text-primary">1. Aquecimento e Mobilidade</h6>
                  <p>
                    Nunca pule o aquecimento. Dedique de 5 a 10 minutos para movimentos articulares e cardio leve, seguidos de séries de aquecimento com carga reduzida no primeiro exercício para evitar lesões e preparar o sistema nervoso.
                  </p>
                  <hr />

                  <h6 class="fw-bold text-primary">2. Princípios para o Treino Ideal</h6>
                  <ul>
                    <li><strong>Sobrecarga Progressiva:</strong> Aumente o estímulo ao longo do tempo (mais carga, mais repetições ou melhor execução).</li>
                    <li><strong>Amplitude de Movimento (ADM):</strong> Execute o movimento completo para recrutar o máximo de fibras musculares.</li>
                    <li><strong>Descanso Adequado:</strong> 1 a 2 minutos para exercícios isolados; 2 a 4 minutos para exercícios compostos pesados.</li>
                  </ul>
                  <hr />

                  <h6 class="fw-bold text-primary">3. Divisão de Treino Sugerida (Exemplo: ABC)</h6>
                  <p>
                    <strong>Treino A (Empurrar):</strong> Peito, Ombros e Tríceps.<br>
                    <strong>Treino B (Puxar):</strong> Costas, Bíceps e Posterior de Ombro.<br>
                    <strong>Treino C (Pernas):</strong> Quadríceps, Posteriores, Panturrilhas e Abdômen.
                  </p>
                  <hr />

                  <h6 class="fw-bold text-primary">4. Recuperação e Nutrição</h6>
                  <p>
                    O músculo cresce em descanso. Garanta de 7 a 9 horas de sono por noite, mantenha uma ingestão adequada de proteínas (1.6g a 2.2g por kg corporal) e hidrate-se constantemente.
                  </p>

                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Fechar
                  </button>
                  <button type="button" class="btn btn-primary">
                    Salvar Minha Rotina
                  </button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>

      <section class="section-servico-3" id="crossfit">
        <div class="d-flex align-items-center justify-content-center pt-5">
          <h1 class="titulo text-center p-3">CrossFit</h1>
        </div>
        <div class="row justify-content-center text-center pt-5 m-0">
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-end">
                <li class="list-group-item">Aumento da força física</li>
                <li class="list-group-item">Queima de calorias</li>
                <li class="list-group-item">Melhora cardiovascular</li>
                <li class="list-group-item">Agilidade e coordenação</li>
              </ul>
            </div>
          </div>
          <div class="col-md-auto pt-5">
            <img
              src="imagens/servico-crossfit-secao1.jpg"
              alt=""
              class="img-fluid img-servicos rounded-5 m-2"
            />
          </div>
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-start">
                <li class="list-group-item">Fortalecimento muscular</li>
                <li class="list-group-item">Superação de limites</li>
                <li class="list-group-item">Treinos dinâmicos</li>
                <!-- Tópico "Saiba mais" que aciona o modal -->
                <li class="list-group-item">
                  <button
                    type="button"
                    class="btn text-decoration-none p-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalCrossfit"
                  >
                    Mini Guia ➤
                  </button>
                </li>
              </ul>
            </div>

            <!-- Modal (Card que abre por cima de tudo) -->
            <div
              class="modal fade"
              id="modalCrossfit"
              tabindex="-1"
              aria-labelledby="modalCrossfitLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow">
                  <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="modalCrossfitLabel">
                      Guia Definitivo para o Treino Ideal de CrossFit
                    </h5>
                    <button
                      type="button"
                      class="btn-close btn-close-white"
                      data-bs-dismiss="modal"
                      aria-label="Fechar"
                    ></button>
                  </div>
                  <div class="modal-body">
                    
                    <h6 class="fw-bold text-primary">1. Estrutura de uma Aula de CrossFit</h6>
                    <p>
                      Uma sessão típica é dividida em etapas fundamentais: <strong>Aquecimento Geral</strong> (mobilidade e elevação cardíaca), <strong>Técnica/Força</strong> (aprendizado de LPO ou movimentos de ginástica) e o temido <strong>WOD</strong> (Workout of the Day / Treino do Dia).
                    </p>
                    <hr />

                    <h6 class="fw-bold text-primary">2. Pilares de Movimento</h6>
                    <ul>
                      <li><strong>Levantamento de Peso Olímpico (LPO):</strong> Domínio técnico do Snatch (Arranque) e Clean & Jerk (Arremesso) para potência e explosão.</li>
                      <li><strong>Ginástica (Bodyweight):</strong> Movimentos com o peso corporal como Pull-ups, Muscle-ups, Handstand Push-ups e Toes-to-bar.</li>
                      <li><strong>Condicionamento Metabólico (Cardio):</strong> Uso de Remo, AirBike, Double Unders (salto duplo de corda) e corrida.</li>
                    </ul>
                    <hr />

                    <h6 class="fw-bold text-primary">3. Formatos Principais de WOD</h6>
                    <p>
                      <strong>AMRAP:</strong> As Many Rounds As Possible (fazer o máximo de rounds em um tempo limite).<br>
                      <strong>EMOM:</strong> Every Minute On the Minute (realizar uma tarefa específica a cada virada de minuto).<br>
                      <strong>For Time:</strong> Concluir uma sequência de exercícios no menor tempo possível.
                    </p>
                    <hr />

                    <h6 class="fw-bold text-primary">4. Escalonamento e Recuperação</h6>
                    <p>
                      <strong>Scale First:</strong> Nunca sacrifique a mecânica pela intensidade. Adapte o peso ou o movimento (scaling) conforme seu nível atual. Foque na recuperação ativa e hidratação rigorosa devido ao alto desgaste metabólico.
                    </p>

                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Fechar
                    </button>
                    <button type="button" class="btn btn-primary">
                      Salvar Meu WOD
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-servico-4" id="pilates">
        <div class="d-flex align-items-center justify-content-center pt-5">
          <h1 class="titulo text-center p-3">Pilates</h1>
        </div>
        <div class="row justify-content-center text-center pt-5 m-0">
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-end">
                <li class="list-group-item">Melhora da postura</li>
                <li class="list-group-item">Flexibilidade e mobilidade</li>
                <li class="list-group-item">Fortalecimento muscular</li>
                <li class="list-group-item">Menos estresse e tensão</li>
              </ul>
            </div>
          </div>
          <div class="col-md-auto pt-5">
            <img
              src="imagens/servico-pilates-secao1.jpg"
              alt=""
              class="img-fluid img-servicos rounded-5 m-2"
            />
          </div>
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-start">
                <li class="list-group-item">Melhora do equilíbrio</li>
                <li class="list-group-item">Alívio de dores</li>
                <li class="list-group-item">Bem-estar e concentração</li>
                <!-- Tópico "Saiba mais" que aciona o modal -->
                <li class="list-group-item">
                  <button
                    type="button"
                    class="btn text-decoration-none p-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalPilates"
                  >
                    Mini Guia ➤
                  </button>
                </li>
              </ul>
            </div>
            <!-- Modal (Card que abre por cima de tudo) -->
            <div
              class="modal fade"
              id="modalPilates"
              tabindex="-1"
              aria-labelledby="modalPilatesLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow">
                  <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="modalPilatesLabel">
                      Guia Definitivo para o Treino Ideal de Pilates
                    </h5>
                    <button
                      type="button"
                      class="btn-close btn-close-white"
                      data-bs-dismiss="modal"
                      aria-label="Fechar"
                    ></button>
                  </div>
                  <div class="modal-body">
                    
                    <h6 class="fw-bold text-primary">1. Os 6 Princípios Básicos do Pilates</h6>
                    <p>
                      A prática eficiente é fundamentada em conceitos essenciais criados por Joseph Pilates: <strong>Concentração</strong>, <strong>Controle</strong>, <strong>Centro (Powerhouse)</strong>, <strong>Fluidez</strong>, <strong>Precisão</strong> e <strong>Respiração</strong>.
                    </p>
                    <hr />

                    <h6 class="fw-bold text-primary">2. Equipamentos e Modalidades</h6>
                    <ul>
                      <li><strong>Mat Pilates:</strong> Exercícios realizados no solo utilizando o próprio peso corporal e acessórios leves (como bolas, círculos mágicos e faixas elásticas).</li>
                      <li><strong>Equipamentos com Molas:</strong> Uso de aparelhos tradicionais como Reformer, Cadillac, Chair e Ladder Barrel para resistência controlada e suporte postural.</li>
                    </ul>
                    <hr />

                    <h6 class="fw-bold text-primary">3. Foco e Benefícios Principais</h6>
                    <p>
                      <strong>Fortalecimento do Core:</strong> Ativação profunda dos músculos abdominais e da coluna.<br>
                      <strong>Mobilidade e Flexibilidade:</strong> Alívio de tensões articulares e alongamento seguro.<br>
                      <strong>Consciência Postural:</strong> Melhora do alinhamento corporal e prevenção de dores crônicas nas costas.
                    </p>
                    <hr />

                    <h6 class="fw-bold text-primary">4. Respiração e Execução</h6>
                    <p>
                      A respiração deve ser torácica (puxando o ar pelo nariz expandindo as costelas e soltando pela boca com o abdômen contraído). A qualidade dos movimentos e o rigor técnico superam sempre a quantidade de repetições.
                    </p>

                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Fechar
                    </button>
                    <button type="button" class="btn btn-primary">
                      Salvar Minha Rotina
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-servico-5" id="zumba">
        <div class="d-flex align-items-center justify-content-center pt-5">
          <h1 class="titulo text-center p-3">Zumba</h1>
        </div>
        <div class="row justify-content-center text-center pt-5 m-0">
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-end">
                <li class="list-group-item">Queima intensa de calorias</li>
                <li class="list-group-item">Condicionamento físico</li>
                <li class="list-group-item">Disposição e energia</li>
                <li class="list-group-item">Menos estresse e ansiedade</li>
              </ul>
            </div>
          </div>
          <div class="col-md-auto pt-5">
            <img
              src="imagens/servico-zumba-secao1.png"
              alt=""
              class="img-fluid img-servicos rounded-5 m-2"
            />
          </div>
          <div class="col-md-auto align-items-center d-flex pt-5">
            <div class="m-auto justify-content-center">
              <ul class="card list-group text-start">
                <li class="list-group-item">Coordenação motora</li>
                <li class="list-group-item">Fortalece músculos</li>
                <li class="list-group-item">Diversão e motivação</li>
                <!-- Tópico "Saiba mais" que aciona o modal -->
                <li class="list-group-item">
                  <button
                    type="button"
                    class="btn text-decoration-none p-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalZumba"
                  >
                    Mini Guia ➤
                  </button>
                </li>
              </ul>
            </div>
            <!-- Modal (Card que abre por cima de tudo) -->
            <div
              class="modal fade"
              id="modalZumba"
              tabindex="-1"
              aria-labelledby="modalZumbaLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow">
                  <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="modalZumbaLabel">
                      Guia Definitivo para o Treino Ideal de Zumba
                    </h5>
                    <button
                      type="button"
                      class="btn-close btn-close-white"
                      data-bs-dismiss="modal"
                      aria-label="Fechar"
                    ></button>
                  </div>
                  <div class="modal-body">
                    
                    <h6 class="fw-bold text-primary">1. Os Ritmos Essenciais da Zumba</h6>
                    <p>
                      A aula mistura passos de dança com aeróbica, tendo como base ritmos latinos e internacionais como <strong>Salsa</strong>, <strong>Merengue</strong>, <strong>Cumbia</strong> e <strong>Reggaeton</strong>.
                    </p>
                    <hr />

                    <h6 class="fw-bold text-primary">2. Modalidades e Estilos</h6>
                    <ul>
                      <li><strong>Zumba Fitness:</strong> A aula tradicional focada em queima calórica, tonificação corporal e alta energia.</li>
                      <li><strong>Zumba Toning:</strong> Incorpora o uso de leves pesos em formato de maracas (Zumba Toning Sticks) para maior definição muscular.</li>
                    </ul>
                    <hr />

                    <h6 class="fw-bold text-primary">3. Foco e Benefícios Principais</h6>
                    <p>
                      <strong>Gasto Calórico Elevado:</strong> Excelente para a perda de peso e queima intensa de gordura.<br>
                      <strong>Saúde Cardiovascular:</strong> Melhora a resistência do coração e a capacidade respiratória.<br>
                      <strong>Bem-estar Mental:</strong> Liberação de endorfina, redução do estresse e aumento da autoestima através da diversão.
                    </p>
                    <hr />

                    <h6 class="fw-bold text-primary">4. Ritmo e Execução</h6>
                    <p>
                      A metodologia é baseada na troca contínua de intensidade (treinamento intervalado), alternando músicas rápidas e lentas. O mais importante não é a perfeição dos passos, mas sim manter-se em movimento e curtir a música.
                    </p>

                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Fechar
                    </button>
                    <button type="button" class="btn btn-primary">
                      Salvar Minha Rotina
                    </button>
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
