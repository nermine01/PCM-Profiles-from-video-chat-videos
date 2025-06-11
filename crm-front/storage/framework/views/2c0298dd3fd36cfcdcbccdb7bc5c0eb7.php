<!DOCTYPE html>
<html lang="fr" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="description" content="<?php echo $__env->yieldContent('page_description'); ?>" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/img/dash/logo.svg')); ?>" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/img/dash/logo.svg')); ?>">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <!-- Icons -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/fonts/fontawesome.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/fonts/tabler-icons.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/fonts/flag-icons.css')); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Core CSS -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/css/rtl/core.css')); ?>" class="template-customizer-core-css" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/css/rtl/theme-default.css')); ?>" class="template-customizer-theme-css" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/css/demo.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/css/style.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/css/header.css')); ?>" />
    <!-- Vendors CSS -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/node-waves/node-waves.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/select2/select2.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/tagify/tagify.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.css')); ?>" />
    <!-- Page CSS -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/vendor/css/pages/app-academy-details.css')); ?>" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="<?php echo e(asset('assets/css/chatbot.css')); ?>" />
    <!-- Helpers -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/helpers.js')); ?>"></script>

    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />


    <?php echo $__env->yieldContent('css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<style>
    .Loading {
        position: absolute;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        z-index: 1;
    }

    .alert-warning {
        color: white;
        background: #ff9672;
    }
</style>

<body>

    <div class="Loading">
        <div class="sk-swing sk-primary">
            <div class="sk-swing-dot"></div>
            <div class="sk-swing-dot"></div>
        </div>
    </div>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- / Navbar -->
                <!-- Content wrapper -->

                <?php echo $__env->yieldContent('content'); ?>
                <!-- / Content -->

           

                <div class="content-backdrop fade"></div>

                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo e(asset('assets/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/menu.js')); ?>"></script>
    <!-- Main JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>


    <script src="<?php echo e(asset('assets/vendor/libs/node-waves/node-waves.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/hammer/hammer.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/i18n/i18n.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.js')); ?>"></script>


    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('assets/vendor/libs/select2/select2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/tagify/tagify.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/bloodhound/bloodhound.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/quill/katex.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/quill/quill.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/forms-editors.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/dropdown-hover.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/js/dropdown-hover.js')); ?>"></script>



    <!-- Page JS -->
    <script src="<?php echo e(asset('assets/js/forms-selects.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/forms-typeahead.js')); ?>"></script>
    <script>
        // On Loading
        window.addEventListener('load', () => {
            const loading = document.querySelector('.Loading');
            if (loading) {
                loading.style.display = 'none';
            }
        });
    </script>
    <script>
        var menu_item = document.querySelectorAll('.menu-link')

        menu_item.forEach((item) => {
            if (window.location.href.includes(item.href)) {
                // console.log(item)
                var parent = item.parentNode
                var grandparent = parent.parentNode
                parent.classList.add('active')
                grandparent.parentNode.classList.add('open')

            }

        })
    </script>

    <script>
        function getCsrfToken() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        }

        function getCats(element_id) {

            const cat_select = document.getElementById(element_id);

            fetch('/api/prompts/get_categories', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),

                }
            }).then((response) => {

                return response.json();
            }).then((data) => {
                while (cat_select.options.length > 1) {
                    cat_select.remove(1);
                }
                data.categories.forEach(cat => {
                    const option = document.createElement('option');
                    option.value = cat.id;
                    option.textContent = cat.nom;

                    cat_select.appendChild(option);
                });
                cat_select.addEventListener('change', function() {
                    getSousCats(cat_select, 'zero-souscat-select', '');
                });
            })
        }

        function getSousCats(categorie, element_id, container_id) {
            const categorie_id = categorie.value;
            const sous_cat_select = document.getElementById(element_id);
            if (container_id != '') {
                const container_elem = document.getElementById(container_id);
                container_elem.innerHTML = "";
            }
            fetch('/api/prompts/get_sous_categories', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),

                },
                body: JSON.stringify({
                    categorie: categorie_id,



                })
            }).then((response) => {

                return response.json();
            }).then((data) => {
                while (sous_cat_select.options.length > 1) {
                    sous_cat_select.remove(1);
                }
                data.sous_cats.forEach(sous_cat => {
                    const option = document.createElement('option');
                    option.value = sous_cat.id;
                    option.textContent = sous_cat.nom;
                    sous_cat_select.appendChild(option);
                });
            })
        }

        function getPrompts(sous_categorie, element_id, page) {
            let sous_cat_elem = document.getElementById(sous_categorie)
            const sous_categorie_id = sous_cat_elem.value;
            const prompts_container = document.getElementById(element_id);
            let query = "";
            const query_elem = document.getElementById('input-query-text');
            if (query_elem != null) {
                query = query_elem.value;
            }
            fetch('/api/prompts/get_prompts', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),

                },
                body: JSON.stringify({
                    sous_categorie_id: sous_categorie_id,
                    page: page,
                    query: query



                })
            }).then((response) => {

                return response.json();
            }).then((data) => {
                prompts_container.innerHTML = "";
                let first = data.prompts.from;
                let last = data.prompts.last_page;
                let current = data.prompts.current_page;
                console.log(first + ' ' + last + ' ' + current);
                data.prompts.data.forEach(prompt => {
                    prompts_container.innerHTML += `
                      <div class="col-lg-4 col-md-4 col-sm-6 mb-4" class="cursor:pointer;">
                          <div class="card cardText2 cursor-pointer" onclick="personalise_prompt(this,true)">
                              <div class="card-body">
                                  <h6 style="font-wight:bold;">` + prompt.titre + `</h6>
                                  <p style="color:grey;font-">` + prompt.prompt + `</p>
                                  <input hidden value="` + prompt.sous_categorie_id + `" id="prompt_id_input" />
                              </div>
                          </div>
                      </div>`;

                });
                let pagination = "";
                if (current > 1) {
                    pagination +=
                        `<li class="page-item"><a class="page-link waves-effect"  onclick="getPrompts('${sous_categorie}','${element_id}',${current-1})"><</a></li>`;
                }
                if (last <= 10) {
                    for (let i = 1; i <= last; i++) {
                        pagination +=
                            `<li class="page-item"><a class="page-link waves-effect ${current==i ? 'active' : ''}" onclick="getPrompts('${sous_categorie}','${element_id}',${i})">` +
                            i +
                            `</a></li>`;
                    }
                } else {
                    for (let i = 1; i <= 10; i++) {
                        pagination +=
                            `<li class="page-item"><a class="page-link waves-effect ${current==i ? 'active' : ''}"   onclick="getPrompts('${sous_categorie}','${element_id}',${i})">` +
                            i +
                            `</a></li>`;
                    }
                    pagination += `<li class="page-item"><a class="page-link waves-effect" >...</a></li>`;
                    for (let i = last - 5; i <= last; i++) {
                        pagination +=
                            `<li class="page-item"><a class="page-link waves-effect ${current==i ? 'active' : ''}" onclick="getPrompts('${sous_categorie}','${element_id}',${i})">` +
                            i +
                            `</a></li>`;
                    }

                }

                if (current < last) {
                    pagination +=
                        `<li class="page-item"><a class="page-link waves-effect" onclick="getPrompts('${sous_categorie}','${element_id}',${current+1})">></a></li>`;
                }
                prompts_container.innerHTML += `
                    <div class="d-flex justify-content-center">
                        <nav>
                            <ul class="pagination">` +
                    pagination +
                    `</ul>    
                        </nav>    
                    </div>
                `;
            });
        }

        function personalise_prompt(prompt, flag) {
            if (flag == true) {
                const next_page = document.getElementById('step_3_btn');
                next_page.click();
            }
            let sous_cat = null;
            const sous_cat_elem = prompt.querySelector('#prompt_id_input');
            if (sous_cat_elem != null) {
                sous_cat = sous_cat_elem.value
            }
            setTimeout(() => {
                generateInputs(prompt.textContent, sous_cat)
            }, 1000);
        }

        function personalise_prompt_bot() {
            // Retrieve elements
            const prompt = document.getElementById('zero-message');
            const promptInput = document.getElementById('zero-souscat-select').value;
            const categorie = document.getElementById('zero-cat-select').value;



            // Validate the category selection
            if (categorie == "") {

                document.getElementById('zero-cat-select').focus();
                return;
            }

            // Validate the subcategory selection
            if (promptInput == "") {

                document.getElementById('zero-souscat-select').focus();
                return;
            }

            // Validate the prompt input
            if (prompt.value == "") {
                prompt.focus();
                return;
            }

            // Simulate a click on the next page button
            const nextPageButton = document.getElementById('step_3_btn');
            nextPageButton.click();

            // Wait 1 second, then call generateInputs and reset fields
            setTimeout(() => {
                // Call generateInputs with prompt value and selected subcategory
                generateInputs(prompt.value, promptInput);

                // Reset the subcategory and message fields
                document.getElementById('zero-souscat-select').value = "";
                document.getElementById('zero-message').value = "";
            }, 1000);
        }

        function generateInputs(prompt, sous_cat_id) {

            const regex = /\[([^\]]+)\]/g;
            let match;
            let prompt_field = document.getElementById('prompt_text_3');
            let inputFieldsContainer = document.getElementById('prompt_inputs_3');
            inputFieldsContainer.innerHTML = ""
            // Parcourt chaque correspondance trouvée dans le texte
            let i = 0;
            this.inputsArray = [];
            let flag = false;
            prompt_field.textContent = prompt;
            while ((match = regex.exec(prompt)) !== null) {
                flag = true;
                let labelText = match[1]; // Texte entre crochets
                labelText = labelText.charAt(0).toUpperCase() + labelText.slice(1);
                // Créer un div pour chaque champ de saisie
                const inputContainer = document.createElement('div');
                inputContainer.classList.add('form-group', 'mb-3');

                // Créer un label pour l'input
                const label = document.createElement('label');
                label.classList.add('form-label');
                label.textContent = labelText;

                // Créer l'input
                const input = document.createElement('input');
                input.classList.add('form-control');
                input.type = 'text';
                input.placeholder = labelText + ' ici...';
                input.name = labelText.toLowerCase().replace(' ', '');
                input.id = 'input' + i;
                this.inputsArray.push({
                    id: 'input' + i,
                    value: ''
                });
                i += 1;
                // Ajouter le label et l'input dans le conteneur
                inputContainer.appendChild(label);
                inputContainer.appendChild(input);

                // Ajouter le conteneur au div principal
                inputFieldsContainer.appendChild(inputContainer);
            }
            if (flag == true) {
                const alertfill = document.createElement('div');
                alertfill.classList.add('alert');
                alertfill.classList.add('col-sm-12');
                alertfill.classList.add('alert-warning');
                alertfill.textContent =
                    "Pour personaliser votre prompt d'une manière réutilisable.Insérez des mots-clés entre croshets [].Vous pourrez ensuite ajuster ces paramètres à chaque nouvelle utilisation";
                inputFieldsContainer.appendChild(alertfill);
            }
            if (flag == false) {
                const alertelem = document.createElement('div');
                alertelem.classList.add('alert');
                alertelem.classList.add('alert-warning');
                alertelem.textContent = 'aucun input à personaliser';
                inputFieldsContainer.appendChild(alertelem);
            }

            if (sous_cat_id != '') {
                const input = document.createElement('input');
                input.setAttribute('hidden', true);
                input.setAttribute('value', sous_cat_id);
                input.setAttribute('id', 'prompt_id_selected');
                inputFieldsContainer.appendChild(input);
            }

        }

        function replaceInputs(type, categorie) {
            const prompt = document.getElementById('prompt_text_3').textContent;
            const regex = /\[([^\]]+)\]/g;
            let match;
            let i = 0;
            let edited_prompt = prompt;
            let sous_cat_id = document.getElementById('prompt_id_selected').value;
            while ((match = regex.exec(prompt)) !== null) {

                let inputvalue = document.getElementById('input' + i).value;
                // Assure-toi que inputvalue existe
                if (inputvalue) {
                    // Remplacer la correspondance trouvée par la valeur de l'input
                    edited_prompt = edited_prompt.replace(match[0], inputvalue);

                }

                i++; // Incrémenter pour le prochain input
            }
            fetch('/api/credit/check', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),

                }
            }).then((response) => {

                return response.json();
            }).then((data) => {
                if (data.content == false) {
                    alert("Désolé vous n'avez plus de crédit");
                } else {
                    generateTextIA(type, edited_prompt, prompt, sous_cat_id, categorie);
                }
            })


        }

        function generateTextIA(type, prompt, original, sous_cat_id, categorie) {
            let url = "";

            const loading_ai = document.getElementById('ai_loader');
            loading_ai.style.display = 'flex';

            if (type == "visuel") {
                url = "/api/prompts/generate_template";
            }
            if (type == "text" || type == 'texte') {
                url = "/api/prompts/generate_text";
            }

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),

                },
                body: JSON.stringify({
                    prompt: prompt,
                    original: original,
                    sous_categorie: sous_cat_id



                })
            }).then((response) => {

                return response.json();
            }).then((data) => {
                console.log(data);
                if (type == "text") {
                    fullEditor6.setText(data.content)

                    loading_ai.style.display = 'none';
                    let generatebtn = document.getElementById('generate-btn');
                    let validerbtn = document.getElementById('valider-btn');
                    generatebtn.innerHTML = `Valider`;
                    if (validerbtn != null) {
                        validerbtn.style.setProperty('display', 'flex', 'important');

                    }
                } else {
                    console.log('template generated');

                    loading_ai.style.display = 'none';
                    window.location.href = '/editeur/edit?type=' + categorie + '&generated_html=' +
                        encodeURIComponent(data.content);
                }
            }).catch((e) => {
                loading_ai.style.display = 'none';
                console.log(e);
            })
        }

        function resetGenerate() {
            fullEditor6.setText('');
            let generatebtn = document.getElementById('generate-btn');
            let validerbtn = document.getElementById('valider-btn');
            generatebtn.innerHTML = `Générer`;
            if (validerbtn != null) {
                validerbtn.style.setProperty('display', 'none', 'important');

            }
        }

        function updateQueryParam(key, value) {
            const url = new URL(window.location.href);
            url.searchParams.set(key, value); // Update or add the new param
            window.location.href = url.toString(); // Redirect to the updated URL
        }
    </script>


    <?php echo $__env->yieldContent('script'); ?>

</body>



</html>
<?php /**PATH C:\Users\Asus\Desktop\Guide\crm front\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>