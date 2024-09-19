INSERT INTO review (content, note, date_review, product_id, user_id)
VALUES
-- Avis positifs sans recommandations
("J'adore ce parfum pour femme ! Il est doux et reste sur la peau toute la journée. Mes collègues l'ont remarqué immédiatement.", 5, 1703933200, 1, 1),
("Ce musc oriental est parfait pour une soirée chic. Il laisse un sillage subtil sans être trop envahissant.", 5, 1703933400, 28, 2),
("L'huile pour le corps est divine, elle laisse ma peau douce et bien hydratée. Une très belle découverte.", 5, 1703933500, 12, 3),
("Le parfum boisé a une excellente tenue et un caractère affirmé, parfait pour les événements en soirée.", 5, 1703933600, 3, 4),

-- Avis positifs avec recommandations
("Le parfum floral est très agréable, mais pour qu'il tienne plus longtemps, je recommande d'appliquer une lotion hydratante avant.", 4, 1703933700, 4, 5),
("La brume pour le corps est rafraîchissante, idéale après une séance de sport. Pour la journée, je l'associe avec le parfum aux agrumes.", 4, 1703933800, 8, 6),

-- Avis mitigés avec recommandations ou critiques
("Le musc en spray est sympa, mais je trouve qu'il ne tient pas assez longtemps. Je conseille de l'accompagner d'un parfum oriental pour un meilleur résultat.", 3, 1703933900, 30, 7),
("Le parfum à la vanille est sucré, peut-être trop pour certains. Je le recommande plutôt en hiver. À combiner avec une lotion neutre pour ne pas être trop écœurant.", 3, 1703934000, 16, 8),
("Brume agréable, mais l'odeur s'évapore un peu trop vite à mon goût. Utilisée avec une lotion, c'est un peu mieux, mais rien de révolutionnaire.", 3, 1703934100, 8, 9),

-- Avis négatifs avec critiques
("Honnêtement, le parfum aux fruits rouges est beaucoup trop sucré pour moi. On dirait un bonbon, pas un parfum. J'ai regretté mon achat.", 2, 1703934200, 21, 10),
("Je n'ai pas du tout aimé cette lotion. Elle laisse un film gras sur la peau, et l'odeur de fleur d'oranger est trop forte.", 2, 1703934300, 11, 11),
("Le musc ambré manque totalement de caractère. Je m'attendais à quelque chose de plus profond et intense. Très déçu.", 2, 1703934400, 26, 12),

-- Avis constructifs avec échanges indirects
("J'utilise la lotion hydratante depuis un moment, mais je rejoins l'avis de Sarah sur l'odeur. Elle est vraiment trop forte si vous êtes sensibles aux parfums.", 3, 1703934500, 11, 13),
("Contrairement à d'autres avis, moi je trouve que le musc au patchouli a une très bonne tenue, et je n'ai même pas besoin de le compléter avec un autre produit.", 4, 1703934600, 37, 14),
("Je ne comprends pas les critiques sur cette brume. Elle est légère, parfaite pour un usage quotidien. Par contre, je conseille de la coupler avec un parfum pour la soirée.", 4, 1703934700, 8, 15),

-- Avis neutres avec observations et nuances
("Le parfum au bois de cèdre est correct, mais rien d'exceptionnel. Je m'attendais à quelque chose de plus raffiné pour le prix.", 3, 1703934800, 18, 16),
("La lotion hydratante est efficace, mais elle manque de légèreté. Je préfère utiliser des lotions moins parfumées. Peut convenir pour l'hiver.", 3, 1703934900, 11, 17),

-- Avis recommandant des combinaisons ou des améliorations
("Le parfum oriental est bien, mais je le trouve trop épicé pour un usage quotidien. En revanche, combiné avec une brume légère, il devient plus portable.", 4, 1703935000, 15, 18),
("J'adore la texture de cette huile, mais je recommande de l'utiliser après une douche. Sinon, elle peut laisser la peau un peu grasse.", 4, 1703935100, 12, 19),
("Parfum à la bergamote très frais. Je l'associe souvent avec une lotion légère pour prolonger la fraîcheur toute la journée.", 5, 1703935200, 23, 20),

-- Avis négatifs avec suggestions d'amélioration
("Le parfum gourmand sucré est beaucoup trop fort et écœurant. Si vous aimez les parfums discrets, passez votre chemin. Peut-être mieux en petite quantité avec une brume.", 2, 1703935300, 5, 21),
("Je n'ai pas apprécié cette huile pour le corps. Elle est trop grasse et ne pénètre pas assez vite. Peut-être mieux pour les peaux très sèches.", 2, 1703935400, 12, 22),
("Le musc floral manque vraiment de profondeur. Peut-être avec une touche de parfum boisé, ça pourrait marcher, mais seul, il est trop fade.", 2, 1703935500, 32, 23),

-- Avis constructifs avec recommandations croisées
("Je trouve que le parfum à la cannelle est un peu trop épicé. Cela dit, utilisé en combinaison avec une lotion douce, il devient plus agréable.", 4, 1703935600, 18, 24),
("Le musc doux est correct, mais comme d'autres, je pense qu'il manque de tenue. Peut-être qu'il irait mieux avec un parfum épicé.", 3, 1703935700, 29, 25),
("Je rejoins l'avis de Paul : ce parfum oriental manque d'intensité. À mon avis, il pourrait être amélioré en le couplant avec une huile boisée.", 3, 1703935800, 15, 26),

-- Avis positifs simples
("Excellent parfum d'été, léger et frais. Parfait pour les journées chaudes.", 5, 1703935900, 6, 27),
("Parfum boisé et cuir incroyable. Une senteur puissante qui tient toute la journée.", 5, 1703936000, 7, 28),

-- Avis mitigés mais équilibrés
("La brume est agréable, mais ne tient pas suffisamment. Je l'utilise principalement en complément d'un parfum oriental.", 3, 1703936100, 8, 29),
("Parfum au patchouli agréable, mais un peu trop fort à mon goût. Peut-être mieux pour les soirées que pour le quotidien.", 4, 1703936200, 17, 30),

-- Avis positifs simples
("Ce parfum unisexe est parfait pour toutes les occasions. Il a un équilibre parfait entre fraîcheur et profondeur.", 5, 1704033200, 2, 31),
("L'eau de toilette est légère et fraîche, idéale pour un usage quotidien. Je ne peux plus m'en passer !", 5, 1704033300, 3, 32),
("Ce musc en roll-on est très pratique, il tient bien toute la journée et l'odeur est sublime.", 5, 1704033400, 33, 33),

-- Avis constructifs avec recommandations
("Le parfum boisé et cuir est agréable, mais je le trouve un peu trop fort pour la journée. Je recommande de l'accompagner d'une brume plus douce pour l'adoucir.", 4, 1704033500, 22, 34),
("L'eau fraîche est vraiment revigorante. Par contre, pour une meilleure tenue, je conseille de l'associer avec une huile hydratante pour le corps.", 4, 1704033600, 16, 35),
("Le parfum cuir et tabac est assez masculin, mais pour le rendre plus polyvalent, je recommande de le combiner avec une touche de parfum fruité.", 4, 1704033700, 21, 36),

-- Avis négatifs avec critiques
("Je ne suis pas fan de ce parfum à la figue. Il est beaucoup trop sucré à mon goût et devient rapidement écœurant.", 2, 1704033800, 20, 37),
("Le musc vanillé est décevant. Je m'attendais à quelque chose de plus enveloppant. L'odeur disparaît rapidement.", 2, 1704033900, 35, 38),
("L'eau de parfum manque cruellement de tenue. Après seulement une heure, il n'y a plus rien. Très décevant pour le prix.", 2, 1704034000, 5, 39),

-- Avis mitigés avec suggestions
("L'eau de parfum est correcte, mais pas exceptionnelle. Pour prolonger la durée, je recommande de l'appliquer sur une peau hydratée avec une lotion neutre.", 3, 1704034100, 5, 40),
("Le musc intense est très agréable, mais il manque de subtilité pour certaines occasions. Peut-être en association avec un parfum plus léger.", 3, 1704034200, 36, 41),
("La brume pour le corps est fraîche, mais ne tient pas assez longtemps. Je l'utilise en complément d'une eau de parfum.", 3, 1704034300, 9, 42),

-- Avis positifs avec recommandations
("Le parfum au gingembre est incroyablement frais et vivifiant. Je recommande d'utiliser une lotion hydratante pour amplifier sa tenue.", 5, 1704034400, 39, 43),
("Le musc au santal est parfait en toute occasion. Pour un effet encore plus enveloppant, je l'associe avec une huile pour le corps.", 5, 1704034500, 30, 44),

-- Suite des avis critiques et échanges indirects
("Je suis d'accord avec l'avis de Julie, ce parfum gourmand sucré est un peu trop sucré à mon goût. Je ne le recommanderais pas pour ceux qui cherchent quelque chose de plus subtil.", 2, 1704034600, 12, 45),
("Contrairement à certains avis, j'adore ce parfum gourmand sucré. C'est vrai qu'il est sucré, mais c'est ce que je recherche dans un parfum. Il tient très bien.", 5, 1704034700, 12, 46),
("Le musc floral et fruité a une odeur agréable, mais je le trouve un peu trop discret. Il faudrait l'associer avec une brume plus marquée pour le faire ressortir.", 3, 1704034800, 28, 47),

-- Avis constructifs avec suggestions de complément
("L'huile pour le corps est très nourrissante et laisse une sensation douce sur la peau. Par contre, pour les journées plus chaudes, je préfère l'associer avec un parfum aquatique.", 4, 1704034900, 13, 48),
("Le parfum à la cannelle est un peu trop épicé pour moi, mais combiné avec une touche de parfum floral, il devient beaucoup plus équilibré.", 4, 1704035000, 27, 49),
("Le musc épicé à la cardamome est agréable, mais je le recommande surtout pour l'hiver. Pour l'été, je préfère quelque chose de plus léger comme un parfum aux agrumes.", 3, 1704035100, 37, 50),

-- Avis positifs simples
("Le parfum oriental est absolument magnifique, parfait pour les soirées. Il tient très bien et laisse une belle signature olfactive.", 5, 1704035200, 7, 51),
("La lotion hydratante est excellente. Elle pénètre rapidement et laisse la peau douce. Je la recommande fortement.", 5, 1704035300, 14, 52),
("Le parfum floral oriental est juste parfait ! Je l’utilise quotidiennement et il dure toute la journée.", 5, 1704035400, 29, 53),

-- Avis négatifs sans recommandation
("Je n’ai pas aimé ce musc fleuri. L’odeur est trop artificielle et ne tient pas bien.", 1, 1704035500, 32, 54),
("Le parfum au patchouli est trop puissant. Même avec une application légère, il est trop envahissant.", 2, 1704035600, 17, 55),

-- Avis mitigés avec nuances
("Ce parfum sensuel est agréable, mais je m'attendais à quelque chose de plus envoûtant. Il manque un peu de caractère.", 3, 1704035700, 31, 56),
("Le parfum floral aquatique est frais, mais ne dure pas longtemps. Je dois en remettre plusieurs fois par jour.", 3, 1704035800, 38, 57),

-- Avis positifs avec recommandations de complément
("Le parfum à la bergamote est fantastique. J'ajoute une petite touche de brume pour le corps pour lui donner encore plus de fraîcheur.", 5, 1704035900, 19, 58),
("J'adore le parfum oriental intense. Pour encore plus de profondeur, je le combine avec un musc boisé.", 5, 1704036000, 11, 59),

-- Avis négatifs et échanges indirects
("Je ne comprends pas l'engouement pour ce parfum aquatique. Je trouve qu'il manque vraiment de tenue. Même en l’associant à une huile, il ne tient pas plus d'une heure.", 2, 1704036100, 24, 60),
("Je ne suis pas d'accord, personnellement, le parfum aquatique tient très bien sur moi, surtout quand je l’applique après la lotion hydratante.", 4, 1704036200, 24, 61);