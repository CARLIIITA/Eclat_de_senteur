DROP DATABASE IF EXISTS eclat_de_senteur;

CREATE DATABASE eclat_de_senteur;

use eclat_de_senteur;

source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\user.sql
describe user;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\categorie.sql
describe categorie;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\product.sql
describe product;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\command.sql
describe command;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\command_line.sql
describe command_line;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\review.sql
describe review;
source C:\Users\utilisateur\Documents\Eclat_de_senteur\src\config\db\cart.sql
describe cart;

-- fake datas
source C:\Users\utilisateur\Documents\eclat_de_senteur\src\config\db\fake-datas\execute.sql


