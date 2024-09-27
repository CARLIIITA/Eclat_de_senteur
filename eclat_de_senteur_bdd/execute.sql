DROP DATABASE IF EXISTS eclat_de_senteur;

CREATE DATABASE eclat_de_senteur;

use eclat_de_senteur;

source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\user.sql
describe user;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\categorie.sql
describe categorie;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\product.sql
describe product;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\command.sql
describe command;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\command_line.sql
describe command_line;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\review.sql
describe review;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\cart.sql
describe cart;

-- fake datas
source C:\Users\utilisateur\Documents\Eclat_de_senteur\eclat_de_senteur_bdd\fake-datas\execute.sql


