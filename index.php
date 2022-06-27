<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage flexpav
 * @since flexpav 1.0
 */

    get_header();
?>

    <header>
        <div class="container">
            <nav>
                <img src="<?= get_template_directory_uri() ?>/assets/flexpav_logo.webp" loading=lazy alt="Flexpav brand">
                <button class="nav-button" aria-label="Menu button"><i class="fas fa-bars"></i></button>
                <ul class="nav-links">
                    <li><a href="#product">Produto</a></li>
                    <li><a href="#how-to-use">Utilização</a></li>
                    <li><a href="#benefits">Vantagens</a></li>
                    <li><a href="#who">Quem somos</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#contact">Contato</a></li>
                    <li>
                        <ul class="nav-social">
                            <li><a href="https://www.instagram.com/flexpav/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.facebook.com/flexpav/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/5527996504140" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </div>
    </header>

    
    <main>
        
        <h1>FlexPav - Asfalto frio com alta tecnologia e qualidade</h1>

        <section class="section-hero">
            <div class="container">

                <div class="hero-banner">
                    <div class="hero-banner--content">
                        <h2>Asfalto a frio com alta tecnologia e qualidade superior.</h2>
                        <p>Conheça o sistema de pavimentação <strong>com foco na sustentabilidade, economia e durabilidade</strong> que já está presente em todo o território nacional.</p>
                        <a class="button button__orange" href="#benefits"><i class="fas fa-search"></i> Conheça todas as vantagens</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- PRODUTO -->
        <section class="section-product" id="product">
            <div class="container">

                <div class="package">
                    <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_package.webp" loading=lazy alt="Embalagem Flexpav">
                    <div>
                        <h2>O que é Flex Pav?</h2>
                        <p>O asfalto <strong>Flex Pav</strong> é um tipo de concreto betuminoso usinado a quente (CBUQ), assim como o asfalto já amplamente utilizado na pavimentação das vias em todo o país.</p>
                        <p>O seu grande diferencial, consiste na adição de um composto resultante da reciclagem de pneus em sua composição, proporcionando melhor rendimento, durabilidade e maior economia aos projetos.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        
                        <div class="product-destaq">
                            <h3>Os custos de uma via em más condições</h3>
                            <p><strong>Uma via em mau estado gera prejuízos</strong>, tanto para a administração pública, quanto para os usuários do sistema de trânsito.</p>
                        </div>

                        <ul class="product-data">
                            <li>
                                <svg width="100" height="100" style="--value:58;">
                                    <circle cx="50" cy="50" r="42"></circle>
                                    <circle cx="50" cy="50" r="42"></circle>
                                </svg>
                                <span class="product-data--percent"><i class="fa-solid fa-arrow-up"></i> 58%</span>
                                <span class="product-data--legend">no consumo de combustível.</span>
                            </li>
                            <li>
                                <svg width="100" height="100" style="--value:38;">
                                    <circle cx="50" cy="50" r="42"></circle>
                                    <circle cx="50" cy="50" r="42"></circle>
                                </svg>
                                <span class="product-data--percent"><i class="fa-solid fa-arrow-up"></i> 38%</span>
                                <span class="product-data--legend">nos custos com manutenção de veículos.</span>
                            </li>
                            <li>
                                <svg width="100" height="100" style="--value:94;">
                                    <circle cx="50" cy="50" r="42"></circle>
                                    <circle cx="50" cy="50" r="42"></circle>
                                </svg>
                                <span class="product-data--percent"><i class="fa-solid fa-arrow-up"></i> 94%</span>
                                <span class="product-data--legend">no tempo médio de duração das viagens.</span>
                            </li>
                            <li>
                                <svg width="100" height="100" style="--value:50;">
                                    <circle cx="50" cy="50" r="42"></circle>
                                    <circle cx="50" cy="50" r="42"></circle>
                                </svg>
                                <span class="product-data--percent"><i class="fa-solid fa-arrow-up"></i> 50%</span>
                                <span class="product-data--legend">no número de acidentes.</span>
                            </li>
                        </ul>

                        <h3><i class="fas fa-caret-right"></i> A origem do Flex Pav</h3>

                        <p>O asfalto <strong>Flex Pav</strong> surgiu da necessidade em prover um material eficiente, com baixo custo de aplicação, que não causasse impacto ambiental, que agilizasse a manutenção de ruas, avenidas e estradas, sem exigir o emprego de equipamentos ou mão de obra especializada e que pudesse prover mais segurança, economia e conforto aos condutores e demais usuários do trânsito.</p>
                        
                        <h3><i class="fas fa-caret-right"></i> Custo competitivo</h3>

                        <p>Em comparação ao asfalto convencional, o asfalto Flex Pav se destaca devido a sua facilidade de aplicação, não sendo necessária a contratação de maquinários específicos ou mão de obra especializada, tornando-se um grande atrativo econômico.</p>
                        <p>Além disso, sua aplicação é mais rápida, permitindo a liberação das vias em menor tempo de execução e sua qualidade e durabilidade superiores, reduzem consideravelmente os custos de manutenção. Estudos comprovam que a economia proporcionada pelo asfalto Flex Pav, em relação ao asfalto convencional, chega a aproximadamente 35% no custo total da obra.</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- FIM PRODUTO -->

        <!-- COMO USAR -->
        <section class="section-use" id="how-to-use">
            <div class="container">
                <h2>Guia de utilização</h2>
                <div class="guide">
                    <div class="guide-items">
                        <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_desagregue.svg" loading=lazy alt="Infográfico da utilização">
                        <h3>Desegregue</h3>
                        <p>Retire o <strong>Flex Pav</strong> da embalagem e faça a sua desagregação.</p>
                    </div>
                    <div class="guide-items">
                        <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_preencha.svg" loading=lazy alt="Infográfico da utilização">
                        <h3>Preencha</h3>
                        <p>Faça o preenchimento de toda a área do pavimento a ser reparada.</p>
                    </div>
                    <div class="guide-items">
                        <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_compacte.svg" loading=lazy alt="Infográfico da utilização">
                        <h3>Compacte</h3>
                        <p>Utilize uma compactadora para fazer a compactação do produto.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM COMO USAR -->

        <!-- BENEFICIOS -->
        <section class="section-benefits" id="benefits">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Principais Vantagens</h2>
                        <ul>
                            <li>Facilidade na utilização;</li>
                            <li>Aplicação mesmo em locais molhados;</li>
                            <li>Possui cura por capacitação;</li>
                            <li>Permite estocagem por até 20 meses;</li>
                            <li>Fornecimento para todo o território nacional;</li>
                            <li>Qualidade superior ao CBUQ;</li>
                            <li>Disponível em sacos de 25kg ou de forma fracionada;</li>
                            <li>Previne a formação de buracos;</li>
                            <li>Previne danos a suspensão e pneus;</li>
                            <li>Permite a rápida liberação da via;</li>
                            <li>Evita a formação de cortinas d'água em dias de chuva;</li>
                            <li>Reduz a reflexão luminosa do pavimento molhado;</li>
                            <li>Melhora a percepção da sinalização horizontal durante a noite;</li>
                            <li>Proporciona viagens mais rápidas, tranquilas e econômicas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM BENEFICIOS -->

        <!-- RENDIMENTO -->
        <section class="section-yield">
            <div class="container">

                <div class="card-yield">
                    <div>
                        <h2><i class="fas fa-caret-right"></i> Rendimento</h2>
                        <p>O asfalto <strong>Flex Pav</strong> possui excelente rendimento, sendo possível cobrir até 1 m&sup2; de superfície e 1cm de espessura, <strong>com apenas um pacote de 25Kg</strong> (para um pavimento de qualidade recomenda-se ao menos 5cm de espessura).</p>
                    </div>
                    <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_rendimento.svg" loading=lazy alt="Infográfico de redimento">
                </div>

            </div>
        </section>
        <!-- FIM RENDIMENTO -->

        <!-- SUSTENTABILIDADE -->
        <section class="section-sustainability">
            <div class="container">
                <div class="card-sustainability">
                    <div class="card-sustainability--text">
                        <h2><i class="fas fa-caret-right"></i> Sustentabilidade</h2>
                        <p>O asfalto <strong>Flax Pav</strong> é um composto à base de polímeros provenientes da borracha de pneus, evitando seu descarte indiscriminado na natureza e promovendo sua reciclagem e sua reutilização de forma apropriada nos pavimentos de todo o país.</p>
                    </div>
                    <figure class="card-sustainability--figure">
                        <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_sustentabilidade.webp" loading=lazy alt="Infográfico sustentabilidade">
                    </figure>
                </div>
            </div>
        </section>
        <!-- FIM SUSTENTABILIDADE -->

        <!-- PERGUNTAS -->
        <section class="section-questions">
            <div class="container">
                <h2><i class="fa-solid fa-circle-question"></i> Perguntas frequentes</h2>
                <ul>
                    <li>
                        <input type="checkbox" id="question-01">
                        <label for="question-01">1. O que é CBUQ?</label>
                        <p>O <strong>Concreto Betuminoso Usinado a Quente</strong> (CBUQ) é um composto de um agregado miúdo (areia), agregado graúdo (brita) e um ligante (CAP - Cimento Asfáltico de Petróleo), obitido da destilação fracionada de petróleo. A mistura dos agregados com o ligante é realizada a quente em uma usina de asfalto. O CBUQ usinado a quante é aplicável a quante, respeitando o limite mínimo de segurança de aplicação em 110°C.</p>
                    </li>
                    <li>
                        <input type="checkbox" id="question-02">
                        <label for="question-02">2. O que é PMF?</label>
                        <p>O <strong>Pré Misturado a Frio</strong> (PMF), consiste em uma mistura feita em usina apropriada, sob temperatura ambiente, utilizando agregado graúdo, agregado miúdo e emulsão asfáltica.<br/>
                        A utilização da emulsão serve para revestir e criar adesividade entre os agregados, fazendo com que o PMF possa ser aplicado a frio. Contudo, ele é de baixíssima qualidade e só deve ser utilizado em emergências, sendo substituído posteriormente pelo Flex Pav.</p>
                    </li>
                    <li>
                        <input type="checkbox" id="question-03">
                        <label for="question-03">3. Qual a diferença entre Flex Pav e o CBUQ comum?</label>
                        <p>É importante observar que é difícil adquirir pequenas quantidades do produto convencional (CBUQ), sendo necessário esperar o acúmulo de valas para viabilizar a aquisição.<br/>
                        Outro problema é o descarte, que acaba gerando despesas de aquisição de material não utilizado, além de não poder ser aplicado em dias de chuva, gerando ociosidade de equipamentos e equipe.<br/>
                        Considerando todos esses fatores, <strong>o Flex Pav oferece um ganho em produtividade de aproximadamente 50%</strong> no tempo, custo e na qualidade em relação ao CBUQ comum.</p>
                    </li>
                    <li>
                        <input type="checkbox" id="question-04">
                        <label for="question-04">4. O que é e para quê serve o aditivo?</label>
                        <p>Consiste num composto à base de polímeros provenientes da borracha de pneus reciclados que, quando adicionado ao CAP durante a usinagem do asfalto, possibilita a diminuição da suscetibilidade térmica do pavimento, aumentando a sua estabilidade em altas e baixas temperaturas, diminuindo o risco de fraturas e trincamentos. Além disso, confere maior resistência às ações da chuva, proporciona maior adesão ao asfalto pré-existente, dispensa o uso de emulsão, pode ser armazenado por 6 meses e possui propriedade de cura por compactação, proporcionando liberação imediata do trânsito.</p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- FIM PERGUNTAS -->

        <!-- QUEM SOMOS -->
        <section class="section-who" id="who">
            <div class="container">
                <div class="who-row">
                    <div class="who-col">
                        <div class="image-grid">
                            <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_projetos_3.webp" alt="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_projetos_2.webp" alt="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/flexpav_projetos_1.webp" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h2>Quem somos</h2>
                        <p>Constituída em 2008, a <strong>Flex Pav</strong> é uma empresa formada por profissionais e estudiosos do ramo de pavimentação, com sede situada em São Paulo-SP e atuação em todo o território nacional.</p>
                        <p>Nosso objetivo é facilitar a execução de obras viárias, diminuindo o tempo de interdição da via e elevar sua qualidade e durabilidade, permitindo uma maior economia, atuando no fornecimento de material, na locação de máquinas e equipamentos, e também na execução de projetos.</p>
                        <p>A <strong>Flex Pav</strong> investe permanentemente em práticas sustentáveis, novas tecnologias e materiais, buscando oferecer sempre soluções inteligentes que atendam às necessidades do mercado nacional.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM QUEM SOMOS -->

        <!-- SERVIÇOS -->
        <section class="section-services" id="services">
            <div class="container">
                <h2>Outros serviços</h2>

                <div class="servicos">
                    <div class="servicos-coluna">
                        <h3><i class="fas fa-caret-right"></i> Execução de projetos de pavimentação</h3>
                        <p>Através de profissionais qualificados e experientes, a <strong>Flex Pav</strong> também atua na execução do seu projeto com agilidade, tranquilidade e segurança.</p>
                        <img src="<?= get_template_directory_uri(); ?>/assets/flexpav-servicos-pavimentacao.webp" alt="Serviços de pavimentação">
                        <small><i class="fas fa-circle-info"></i> Mão de obra qualificada e experiente</small>
                    </div>
                    <div class="servicos-coluna">
                        <h3><i class="fas fa-caret-right"></i> Locação de equipamentos</h3>
                        <p>A <strong>Flex Pav</strong> disponibiliza para locação, máquinas de alta performance voltadas para auxiliar na execução do seu projeto.</p>
                        <img src="<?= get_template_directory_uri(); ?>/assets/flexpav-servicos-equipamentos.webp" alt="Locação de equipamentos">
                        <small><i class="fas fa-circle-info"></i> Compactadoras e cortadoras para seu projeto</small>
                    </div>
                </div>

            </div>
        </section>
        <!-- FIM SERVIÇOS -->

        <!-- CONTATO -->
        <section class="section-contact" id="contact">
            <div class="container">
                <h2>Contato</h2>
                <div class="row">
                    <div class="col">
                        <p>Flex Pav Soluções em Pavimentação LTDA<br/>
                        <strong>CNPJ</strong>: 41.235.614/0001-30<br/>
                        <strong>Inscrição Estadual</strong>: 083.750.95-9</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>Endereço <br/>
                                Cariacica-ES &bullet; 29100-000</li>
                            <li><a href="tel:+5527996504140"><i class="fa-solid fa-phone"></i> (27) 99650-4140</a></li>
                            <li><a target="_blank" href="mailto:contato@flexpav.com.br">contato@flexpav.com.br</a></li>
                            <li>
                                <ul class="contact-social">
                                    <li><a href="https://www.instagram.com/flexpav/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://www.facebook.com/flexpav/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/5527996504140" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM CONTATO -->

    </main>

<?php get_footer(); ?>