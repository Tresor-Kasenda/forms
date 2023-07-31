
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrat administratif</title>
    <link href="/style.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .hidden {
          opacity: 0;
          transition: opacity 0.5s ease-in-out;
        }
      
        .visible {
          opacity: 1;
          transition: opacity 0.5s ease-in-out;
        }
      </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="hidden" id="success-message">
        <p class="text-green-500">Form submitted successfully.</p>
      </div>

    <div class="max-w-4xl mx-auto min-h-screen">
        <div class="container bg-white rounded-lg shadow-lg px-6 py-8">
            <form class="max-w-md mx-auto" id="my-form" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="nom-complet">Nom complet:</label>
                    <input
                        class="form-input block w-full mt-1 rounded-lg border border-gray-300 placeholder:text-sm placeholder-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-50"
                        id="nom-complet" name="nom-complet" placeholder="Nom complet" type="text" required>
                        <p id="nom-complet-error" class="text-red-500 text-xs mt-1 hidden">
                            Veuillez entrer votre nom complet
                          </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="boite-mail">Boîte mail:</label>
                    <input
                        class="form-input block w-full mt-1 rounded-lg border border-gray-300 placeholder:text-sm placeholder-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-50"
                        id="boite-mail" name="boite-mail" type="email" placeholder="Boite email" required>
                        <p id="boite-email" class="text-red-500 text-xs mt-1 hidden">
                            Veuillez entrer votre nom complet
                          </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="sexe">Sexe:</label>
                    <select
                        class="form-select block w-full mt-1 rounded-lg border border-gray-300 placeholder:text-sm placeholder-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-50"
                        id="sexe" name="sexe" required>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autre">Autre</option>
                    </select>
                    <p id="sexe" class="text-red-500 text-xs mt-1 hidden">
                        Veuillez entrer votre nom complet
                      </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="contact">Contact: (+243) ...</label>
                    <input
                        class="form-input block w-full mt-1 rounded-lg border border-gray-300 placeholder:text-sm placeholder-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-50"
                        id="contact" name="contact" placeholder="Contact: (+243) ..." type="tel" required>
                        <p id="contact" class="text-red-500 text-xs mt-1 hidden">
                            Veuillez entrer votre nom complet
                          </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="secteur">Secteur:</label>
                    <select
                        class="form-select block w-full mt-1 rounded-lg border border-gray-300 placeholder:text-sm placeholder-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-50"
                        id="secteur" name="secteur" required>
                        <option value="public">Public</option>
                        <option value="prive">Privé</option>
                        <option value="liberal">Libéral</option>
                    </select>
                    <p id="secteur" class="text-red-500 text-xs mt-1 hidden">
                        Veuillez entrer votre nom complet
                      </p>
                </div>



                <div x-data="{ participation: '' }">
                    <div class="mb-4">
                      <label class="block text-gray-700 font-bold mb-2" for="participation">Participation:</label>
                      <select x-model="participation"
                              class="form-select block w-full mt-1 rounded-lg border border-gray-300 placeholder:text-sm placeholder-gray-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-50"
                              id="participation" name="participation" required>
                        <option value="vip">VIP 50$</option>
                        <option value="classique">CLASSIQUE 30$</option>
                        <option value="etudiant">ÉTUDIANT : GRATUIT</option>
                      </select>
                      <p id="participation" class="text-red-500 text-xs mt-1 hidden">
                        Veuillez entrer votre nom complet
                      </p>
                    </div>
                    <div class="mb-4" x-show="participation">
                      <label class="block text-gray-700 font-bold mb-2">Options:</label>
                      <div class="ml-4">
                        <div x-show="participation === 'vip'">
                          <input type="checkbox" id="participation-conferences" name="participation-conferences"
                                 class="form-checkbox" checked>
                          <label for="participation-conferences" class="ml-2 text-sm font-gray-500">Participation aux conférences</label>
                        </div>
                        <div x-show="participation === 'classique'">
                            <input type="checkbox" id="participation-conferences" name="participation-conferences"
                                   class="form-checkbox" checked>
                            <label for="participation-conferences" class="ml-2 text-sm font-gray-500">Participation aux conférences</label>
                          </div>
                          <div x-show="participation === 'etudiant'">
                            <input type="checkbox" id="participation-conferences" name="participation-conferences"
                                   class="form-checkbox" checked>
                            <label for="participation-conferences" class="ml-2 text-sm font-gray-500">Participation aux conférences</label>
                          </div>
                        <div x-show="participation === 'vip'">
                          <input type="checkbox" id="participation-stand" name="participation-stand"
                                 class="form-checkbox" checked>
                          <label for="participation-stand" class="ml-2 text-sm font-gray-500">Visite stand</label>
                        </div>
                        <div x-show="participation === 'classique'">
                            <input type="checkbox" id="participation-stand" name="participation-stand"
                                   class="form-checkbox" checked>
                            <label for="participation-stand" class="ml-2 text-sm font-gray-500">Visite stand</label>
                          </div>
                          <div x-show="participation === 'etudiant'">
                            <input type="checkbox" id="participation-stand" name="participation-stand"
                                   class="form-checkbox" checked>
                            <label for="participation-stand" class="ml-2 text-sm font-gray-500">Visite stand</label>
                          </div>
                        <div x-show="participation === 'vip'">
                          <input type="checkbox" id="participation-cocktail" name="participation-cocktail"
                                 class="form-checkbox" checked>
                          <label for="participation-cocktail" class="ml-2 text-sm font-gray-500">Cocktail VIP</label>
                        </div>
                        <div x-show="participation === 'classique'">
                            <input type="checkbox" id="participation-cocktail" name="participation-cocktail"
                                   class="form-checkbox" checked>
                            <label for="participation-cocktail" class="ml-2 text-sm font-gray-500">Cocktail</label>
                          </div>
                          <div x-show="participation === 'etudiant'">
                            <input type="checkbox" id="participation-cocktail" name="participation-cocktail"
                                   class="form-checkbox" checked>
                            <label for="participation-cocktail" class="ml-2 text-sm font-gray-500">Cocktail</label>
                          </div>
                        <div x-show="participation === 'vip'">
                          <input type="checkbox" id="participation-networking" name="participation-networking"
                                 class="form-checkbox" checked>
                          <label for="participation-networking" class="ml-2 text-sm font-gray-500">Réseautage avec les institutionnels et autorités</label>
                        </div>
                        <div x-show="participation === 'vip'">
                          <input type="checkbox" id="participation-inscription" name="participation-inscription"
                                 class="form-checkbox" checked>
                          <label for="participation-inscription" class="ml-2 text-sm font-gray-500">Inscription sur la plateforme dédiée au droit de la commande publique</label>
                        </div>
                        <div x-show="participation === 'vip'">
                          <input type="checkbox" id="participation-inscription" name="participation-inscription"
                                 class="form-checkbox" checked>
                          <label for="participation-inscription" class="ml-2 text-sm font-gray-500">Inscription sur la plateforme dédiée au droit de la commande publique</label>
                        </div>
                        <div x-show="participation === 'etudiant'">
                            <input type="checkbox" id="participation-inscription" name="participation-inscription"
                                   class="form-checkbox" checked="true">
                            <label for="participation-inscription" class="ml-2 text-sm font-gray-500">Inscription sur la plateforme AWA dédiée au droit de la commande publique</label>
                          </div>
                      </div>
                    </div>
                  </div>


                <div class="mb-4">
                    <label class="block text-gray-700 mb-2 text-sm">Souhaiteriez-vous recevoir les annonces relatives au
                        droit de la commande publique:</label>
                    <div class="ml-4 flex items-center space-x-4">
                        <div>
                            <input type="radio" id="annonces-oui" name="annonces" class="form-radio" value="oui"
                                required>
                            <label for="annonces-oui" class="ml-2">Oui</label>
                        </div>
                        <div>
                            <input type="radio" id="annonces-non" name="annonces" class="form-radio" value="non"
                                required>
                            <label for="annonces-non" class="ml-2">Non</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Soumettre
                    </button>
                </div>
            </form>
        </div>

    </div>

    <script>
        const form = document.getElementById('my-form');
        const nomComplet = document.getElementById('nom-complet');
        const boiteMail = document.getElementById('boite-mail');
        const sexe = document.getElementById('sexe');
        const contact = document.getElementById('contact');
        const secteur = document.getElementById('secteur');
        const participation = document.getElementById('participation');
        const annoncesOui = document.getElementById('annonces-oui');
        const annoncesNon = document.getElementById('annonces-non');

        const successMessage = document.getElementById('success-message');

        form.addEventListener('submit', (event) => {
            event.preventDefault(); // prevent default form submission behavior

            // validate form fields here
            if (nomComplet.value === '') {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                nomComplet.classList.add('border-red-500');
                nomComplet.focus();
                return false;
            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
                nomComplet.classList.remove('border-red-500');
            }

            if (boiteMail.value === '' && isValidEmail(boiteMail.value)) {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                boiteMail.classList.add('border-red-500');
                boiteMail.focus();
                return false;
            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
                boiteMail.classList.remove('border-red-500');
            }

            if (sexe.value === '') {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                sexe.classList.add('border-red-500');
                sexe.focus();
                return false;
            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
                sexe.classList.remove('border-red-500');
            }

            if (contact.value === '') {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                contact.classList.add('border-red-500');
                contact.focus();
                return false;
            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
                contact.classList.remove('border-red-500');

            }

            if (secteur.value === '') {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                secteur.classList.add('border-red-500');
                secteur.focus();
                return false;

            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
                secteur.classList.remove('border-red-500');

            }

            if (participation.value === '') {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                participation.classList.add('border-red-500');
                participation.focus();
                return false;

            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
                participation.classList.remove('border-red-500');

            }

            if (!annoncesOui.checked && !annoncesNon.checked) {
                document.getElementById('nom-complet-error').classList.remove('hidden');
                return false;
            } else {
                document.getElementById('nom-complet-error').classList.add('hidden');
            }

            // send form data to PHP script
            const formData = new FormData(form);
            fetch('submit.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        form.classList.add('hidden');
                        successMessage.classList.remove('hidden');
                    } else {
                        toastr.error('Form submission failed.');
                    }
                })
                .catch(error => {
                    console.error(error);
                    toastr.error('An error occurred while submitting the form.');
                });
            });
            }
        });

            let isValidEmail = (email) => {
                const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }

    </script>
</body>

</html>