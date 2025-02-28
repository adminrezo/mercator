<?php
return [
    "activity" => [
        "description" => "Étape nécessaire à la réalisation d’un processus. Elle correspond à un savoir-faire spéciﬁque et pas forcément à une structure organisationnelle de l’entreprise.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "Description de l'opération",
            "name" => "Nom",
            "name_helper" => "Nom de l'opération",
            "operations" => "Opérations",
            "operations_helper" => "Liste des opérations réalisées",
            "processes" => "Processus",
            "processes_helper" => "Liste des processus parents"
        ],
        "title" => "Activités",
        "title_singular" => "Activité"
    ],
    "actor" => [
        "description" => "Représentant d’un rôle métier qui exécute des opérations, utilise des applications et prend des décisions dans le cadre des processus. Ce rôle peut être porté par une personne, un groupe de personnes ou une entité.",
        "fields" => [
            "contact" => "Contact",
            "contact_helper" => "Moyen de contact",
            "name" => "Nom",
            "name_helper" => "Nom de l'acteur",
            "nature" => "Nature",
            "nature_helper" => "Ex : personne, groupe, entité, etc.",
            "operations" => "Opérations",
            "operations_helper" => "Liste des opérations auxquels participe l'acteur",
            "type" => "Type",
            "type_helper" => "interne ou externe à l’organisme"
        ],
        "title" => "Acteurs",
        "title_singular" => "Acteur"
    ],
    "administration" => [
        "title" => "Vue de l'administration",
        "title_short" => "Administration",
        "title_singular" => "Vue de l'administration"
    ],
    "annuaire" => [
        "description" => "Applicatif regroupant les données sur les utilisateurs ou équipements informatiques de l’entreprise et permettant leur administration.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "solution" => "Solution",
            "solution_helper" => "",
            "zone_admin" => "Zone Admin",
            "zone_admin_helper" => ""
        ],
        "title" => "Services d'annuaire d'administration",
        "title_short" => "Annuaires",
        "title_singular" => "Service d'annuaire d'administration"
    ],
    "application" => [
        "description" => "Ensemble cohérent d’objets informatiques (exécutables, programmes, données...). Elle constitue un regroupement de services applicatifs.",
        "fields" => [
            "application_block" => "Bloc applicatif",
            "application_block_helper" => "Bloc applicatif dont fait partie cette application",
            "databases" => "Bases de données",
            "databases_helper" => "Liste des bases de données utilisées par l’application",
            "description" => "Description",
            "description_helper" => "",
            "documentation" => "Documentation",
            "documentation_helper" => "Lien vers la documentation",
            "entities" => "Entités",
            "entities_helper" => "Liste des entités utilisatrices",
            "entity_resp" => "Exploitation",
            "entity_resp_helper" => "Entité responsable de l'exploitation",
            "external" => "Exposition à l’externe",
            "external_helper" => "ex. : solution de type Software as a Service – SaaS",
            "flux" => "Flux",
            "flux_helper" => "Flux associés",
            "logical_servers" => "Serveurs logiques",
            "logical_servers_helper" => "Liste des serveurs logiques soutenant l’application",
            "name" => "Nom",
            "name_helper" => "",
            "processes" => "Processus",
            "processes_helper" => "Liste des processus soutenus par l'application",
            "responsible" => "Responsable",
            "responsible_helper" => "Equipe ou personnes responsables de l'application",
            "security_need" => "Besoins de sécurité",
            "security_need_helper" => "Besoins de sécurité de l'application",
            "services" => "Services",
            "services_helper" => "Liste des services applicatifs délivrés par l’application",
            "technology" => "Technologie",
            "technology_helper" => "Type de technologie: client loud, web, etc.",
            "type" => "Type d'application",
            "type_helper" => "ex : dév. interne, logiciel, progiciel, script, EAI/ESB, etc.",
            "users" => "Utilisateurs",
            "users_helper" => "Volume d’utilisateurs et profils",
            "version" => "Version",
            "version_helper" => "Version de l'application"
        ],
        "title" => "Applications",
        "title_short" => "Applications",
        "title_singular" => "Application"
    ],
    "applicationBlock" => [
        "description" => "Ensemble d'applications.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "Applications qui font partie de ce bloc applicatif",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "responsible" => "Responsable",
            "responsible_helper" => "Responsable des applications de ce bloc d'applications"
        ],
        "title" => "Blocs applicatif",
        "title_singular" => "Bloc applicatif"
    ],
    "applicationModule" => [
        "description" => "Composant d’une application caractérisé par une cohérence fonctionnelle en matière d’informatique et une homogénéité technologique.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "flux" => "Flux",
            "flux_helper" => "Flux associés au module",
            "name" => "Nom",
            "name_helper" => "",
            "services" => "Services",
            "services_helper" => "Services qui utilisent ce module"
        ],
        "title" => "Modules applicatif",
        "title_short" => "Modules",
        "title_singular" => "Module Applicatif"
    ],
    "applicationService" => [
        "description" => "Élément de découpage de l’application mis à disposition de l’utilisateur final dans le cadre de son travail. Un service applicatif peut, par exemple, être un service dans le nuage (Cloud).",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "Liste des applications qui utilisent ce service applicatif",
            "description" => "Description",
            "description_helper" => "",
            "exposition" => "Exposition",
            "exposition_helper" => "Exposition à l'externe (ex.: service dans le nuage, cloud)",
            "flux" => "Flux",
            "flux_helper" => "Flux associés",
            "modules" => "Modules",
            "modules_helper" => "Liste des modules qui composent ce service applicatif",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "Services applicatifs",
        "title_short" => "Services",
        "title_singular" => "Service applicatif"
    ],
    "auditLog" => [
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "host" => "Host",
            "host_helper" => "",
            "properties" => "Properties",
            "properties_helper" => "",
            "subject_id" => "Subject ID",
            "subject_id_helper" => "",
            "subject_type" => "Subject Type",
            "subject_type_helper" => "",
            "user_id" => "User ID",
            "user_id_helper" => ""
        ],
        "title" => "Audits Logs",
        "title_singular" => "Audit Log"
    ],
    "bay" => [
        "description" => "Armoire technique rassemblant des équipements de réseau informatique ou de téléphonie.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "peripherals" => "Périphériques",
            "physical_routers" => "Routeurs physiques",
            "physical_security_devices" => "Dispositifs de sécurité physique",
            "physical_servers" => "Serveurs physiques",
            "physical_switches" => "Commutateurs physiques",
            "room" => "Bâtiment / Salle",
            "room_helper" => "",
            "storage_devices" => "Dispositifs de stockages"
        ],
        "title" => "Baies",
        "title_singular" => "Baie"
    ],
    "building" => [
        "description" => "Localisation des personnes ou ressources à l’intérieur d’un site.",
        "fields" => [
            "badge" => "Badge",
            "badge_helper" => "L'accès est protégé par un lecteur de badge",
            "bays" => "Baies",
            "bays_helper" => "",
            "camera" => "Caméra",
            "camera_helper" => "Le local est équipé d'une caméra",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve ce bâtiment / salle"
        ],
        "title" => "Bâtiments / Salles",
        "title_singular" => "Bâtiment / Salle"
    ],
    "certificate" => [
        "description" => "Un certificat électronique (aussi appelé certificat numérique ou certificat de clé publique) peut être vu comme une carte d'identité numérique. Il est utilisé principalement pour identifier et authentifier une personne physique ou morale, mais aussi pour chiffrer des échanges.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "Applications où est installé ce certificat",
            "description" => "Description",
            "description_helper" => "Description du certificat",
            "end_validity" => "Date de fin",
            "end_validity_helper" => "Date de fin de validité du certificat",
            "logical_servers" => "Serveurs logiques",
            "logical_servers_helper" => "Serveurs logiques où est installé ce certificat",
            "name" => "Nom",
            "name_helper" => "Nom du certificat",
            "start_validity" => "Date de début",
            "start_validity_helper" => "Date de début de validité du certificat",
            "type" => "Type",
            "type_helper" => "Type de certificat"
        ],
        "title" => "Certificats",
        "title_short" => "Certificats",
        "title_singular" => "Certificat"
    ],
    "configuration" => [
        "certificate" => [
            "delay" => "les certificats qui expirent dans",
            "message_subject" => "Sujet du message",
            "recurence" => "tous les",
            "sent_from" => "Envoyé depuis",
            "title" => "Expiration des certificats",
            "to" => "à"
        ],
        "title" => "Configuration",
        "title_singular" => "Configuration"
    ],
    "database" => [
        "description" => "Ensemble structuré et ordonné d’informations destinées à être exploitées informatiquement.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "Liste des applications qui utilisent la base de données",
            "description" => "Description",
            "description_helper" => "",
            "entities" => "Entité utilisatrices",
            "entities_helper" => "Liste de la (des) entité(s) utilisatrice(s)",
            "entity_resp" => "Entité responsable",
            "entity_resp_helper" => "Entité responsable de l’exploitation",
            "external" => "Exposition à l'externe",
            "external_helper" => "ex: Interne / Externe / Local",
            "flux" => "Flux",
            "flux_helper" => "Flux associés",
            "informations" => "Informations",
            "informations_helper" => "Liste des informations contenues dans la base de données",
            "name" => "Nom",
            "name_helper" => "Nom de la base de données",
            "responsible" => "Responsable SSI",
            "responsible_helper" => "",
            "security_need" => "Besoins de sécurité (CIDT)",
            "security_need_helper" => "Besoins de sécurité de la base de données",
            "type" => "Type de technologie",
            "type_helper" => "ex: mySQL, Oracle, SQL Server"
        ],
        "title" => "Bases de données",
        "title_singular" => "Base de données"
    ],
    "dhcpServer" => [
        "description" => "Équipement physique ou virtuel permettant la gestion des adresses IP d’un réseau.",
        "fields" => [
            "address_ip" => "Adresse IP",
            "address_ip_helper" => "Filtre : xxx.xxx.xxx.xxx",
            "description" => "Description",
            "description_helper" => "Caractéristiques techniques : modèle, OS et version",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "Serveurs DHCP",
        "title_singular" => "Serveur DHCP"
    ],
    "dnsserver" => [
        "description" => "Serveur de noms de domaine (Domain Name System) – Équipement physique ou virtuel permettant la conversion d’un nom de domaine en adresse IP.",
        "fields" => [
            "address_ip" => "Adresse IP",
            "address_ip_helper" => "Filtre : xxx.xxx.xxx.xxx",
            "description" => "Description",
            "description_helper" => "Caractéristiques techniques : modèle, OS et version",
            "name" => "Nom",
            "name_helper" => "Nom du serveur DNS"
        ],
        "title" => "Serveurs DNS",
        "title_singular" => "Serveur DNS"
    ],
    "domaineAd" => [
        "description" => "Ensemble d’éléments (membres, ressources) régis par une même politique de sécurité.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "domain_ctrl_cnt" => "Nombre de contrôleurs de domaine",
            "domain_ctrl_cnt_helper" => "",
            "forestAds" => "Forêts Active Directory / ArborescencesLDAP",
            "machine_count" => "Nombre de machines",
            "machine_count_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "relation_inter_domaine" => "Relation Inter Domaine",
            "relation_inter_domaine_helper" => "",
            "user_count" => "Nombre de comptes utilisateur",
            "user_count_helper" => ""
        ],
        "title" => "Domaines Active Directory / LDAP",
        "title_short" => "Domaines",
        "title_singular" => "Domaine Active Directory / LDAP"
    ],
    "entity" => [
        "description" => "Partie de l’organisme (ex. : filiale, département, etc.) ou système d’information en relation avec le SI qui vise à être cartographié.",
        "fields" => [
            "applications_resp" => "Applications",
            "applications_resp_helper" => "Responsable de l'exploitation des applications",
            "contact_point" => "Point de contact",
            "contact_point_helper" => "",
            "databases_resp" => "Bases de données",
            "databases_resp_helper" => "Responsable de l'exploitation des bases de données",
            "description" => "Description",
            "description_helper" => "",
            "exploits" => "Exploite",
            "name" => "Nom",
            "name_helper" => "Nom de l'entité ou du système",
            "processes" => "Processus soutenus",
            "processes_helper" => "Liste des processus soutenus par l'entité",
            "relations" => "Relations",
            "relations_helper" => "Relations avec d'autres entités",
            "security_level" => "Niveau de sécurité",
            "security_level_helper" => "ex. : maturité, mesures de sécurité en place ou définies au niveau contractuel, degré de confiance, homologation"
        ],
        "title" => "Entités",
        "title_singular" => "Entité"
    ],
    "externalConnectedEntity" => [
        "description" => "Entités externes connectées au réseau.",
        "fields" => [
            "connected_networks" => "Réseaux connectés",
            "connected_networks_helper" => "Réseaux internes connectés à l'entité",
            "contacts" => "Contacts SI",
            "contacts_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "responsible_sec" => "Responsable SSI",
            "responsible_sec_helper" => ""
        ],
        "title" => "Entités extérieures connectées",
        "title_short" => "Entités",
        "title_singular" => "Entité extérieure connectée"
    ],
    "flux" => [
        "description" => "Echange d’informations entre un émetteur ou un récepteur (service applicatif, application ou acteur).",
        "fields" => [
            "application_dest" => "Application destinataire",
            "application_dest_helper" => "",
            "application_source" => "Application Source",
            "application_source_helper" => "",
            "bidirectional" => "Bidirectionnel",
            "bidirectional_helper" => "Le flux est bidirectionnel",
            "crypted" => "Chiffrement",
            "crypted_helper" => "Le flux est chiffré",
            "database_dest" => "Database Destinataire",
            "database_dest_helper" => "",
            "database_source" => "Database Source",
            "database_source_helper" => "",
            "description" => "Description",
            "description_helper" => "",
            "destination" => "Destination",
            "module_dest" => "Module destinataire",
            "module_dest_helper" => "",
            "module_source" => "Module Source",
            "module_source_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "service_dest" => "Service destinataire",
            "service_dest_helper" => "",
            "service_source" => "Service Source",
            "service_source_helper" => "",
            "source" => "Source"
        ],
        "title" => "Flux",
        "title_singular" => "Flux"
    ],
    "forestAd" => [
        "description" => "Regroupement organisé de domaines Active Directory/LDAP.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "domaines" => "Domaines",
            "domaines_helper" => "Domaines appartenant à la forêt/l’arborescence",
            "name" => "Nom",
            "name_helper" => "",
            "zone_admin" => "Zone d'administration",
            "zone_admin_helper" => ""
        ],
        "title" => "Forêts Active Directory / LDAP",
        "title_short" => "LDAP",
        "title_singular" => "Forêt Active Directory / LDAP"
    ],
    "gateway" => [
        "description" => "Composants permettant de relier un réseau local avec l’extérieur.",
        "fields" => [
            "authentification" => "Type d'authentification",
            "authentification_helper" => "",
            "description" => "Caractéristiques techniques",
            "description_helper" => "",
            "ip" => "IP publique et privée",
            "ip_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "subnetworks" => "Sous-réseaux connectés",
            "subnetworks_helper" => "Sous-réseaux accessibles depuis la passerelle"
        ],
        "title" => "Passerelles d’entrées depuis l’extérieur",
        "title_short" => "Passerelles",
        "title_singular" => "Passerelle d’entrée depuis l’extérieur"
    ],
    "information" => [
        "description" => "Donnée faisant l’objet d’un traitement informatique.",
        "fields" => [
            "administrator" => "Administrateur",
            "administrator_helper" => "",
            "constraints" => "Contraintes",
            "constraints_helper" => "Contraintes règlementaires et normatives",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "owner" => "Propriétaire",
            "owner_helper" => "",
            "processes" => "Processus",
            "processes_helper" => "Processus utilisant cette information",
            "security_need" => "Besoins de sécurité (CIDT)",
            "security_need_helper" => "Besoins de sécurité de l'information",
            "sensitivity" => "Sensibilité",
            "sensitivity_helper" => "Donnée à caractère personnel, donnée médicale, donnée classifiée, etc.",
            "storage" => "Stockage",
            "storage_helper" => "Type de stockage de l'information (local, disque, papier...)"
        ],
        "title" => "Informations",
        "title_singular" => "Information"
    ],
    "lan" => [
        "description" => "Réseau informatique reliant des équipements sur une aire géographique réduite.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "LAN - Local Area Network",
        "title_short" => "LAN",
        "title_singular" => "LAN - Local Area Network"
    ],
    "logicalServer" => [
        "description" => "Découpage logique d’un serveur physique.",
        "fields" => [
            "address_ip" => "Adresse(s) IP",
            "address_ip_helper" => "Filtre : xxx.xxx.xxx.xxx, xxx.xxx.xxx.xxx, ...",
            "applications" => "Applications",
            "applications_helper" => "Applications installées",
            "certificates" => "Certificats",
            "certificates_helper" => "Certificats installés sur ce serveur",
            "configuration" => "Configuration",
            "configuration_helper" => "Autres caractéristiques techniques",
            "cpu" => "CPU",
            "cpu_helper" => "Nombre de CPU",
            "description" => "Description",
            "description_helper" => "",
            "disk" => "Disque",
            "disk_helper" => "Espace disque alloué (GB)",
            "environment" => "Environnement",
            "environment_helper" => "Prod, Préprod, Test, Dev, Integration, ...",
            "memory" => "Mémoire",
            "memory_helper" => "Quantité de mémoire allouée",
            "name" => "Nom",
            "name_helper" => "",
            "net_services" => "Services réseau actifs",
            "net_services_helper" => "",
            "operating_system" => "Operating Système",
            "operating_system_helper" => "Nom et version de l'OS",
            "servers" => "Serveurs physiques",
            "servers_helper" => "Serveur physique de support"
        ],
        "title" => "Serveurs logiques",
        "title_short" => "Serveurs",
        "title_singular" => "Serveur logique"
    ],
    "macroProcessus" => [
        "description" => "Ensemble des macro-processus.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "io_elements" => "Éléments entrants et sortants",
            "io_elements_helper" => "",
            "name" => "Nom",
            "name_helper" => "Nom du macro-processus",
            "owner" => "Propriétaire",
            "owner_helper" => "Propriétaire du macro-processus",
            "processes" => "Processus",
            "processes_helper" => "Liste des processus qui le composent",
            "security_need" => "Besoins de sécurité (CIDT)",
            "security_need_helper" => "Besoins de sécurité du macro-processus"
        ],
        "title" => "Macro-Processus",
        "title_singular" => "Macro-Processus"
    ],
    "man" => [
        "description" => "Réseau informatique reliant des équipements sur des distances moyennement importantes. Il interconnecte généralement des LAN entre eux.",
        "fields" => [
            "lans" => "LANs rattachés",
            "lans_helper" => "",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "MAN - Middle Area Network",
        "title_short" => "MAN",
        "title_singular" => "MAN - Middle Area Network"
    ],
    "menu" => [
        "administration" => [
            "description" => "La vue de l’administration est un cas particulier de la vue des applications. Elle répertorie les périmètres et les niveaux de privilèges des administrateurs.",
            "title" => "Vue de l'administration",
            "title_short" => "Administration"
        ],
        "application" => [
            "description" => "La vue des applications permet de décrire une partie de ce qui est classiquement appelé le « système informatique ». Cette vue décrit les solutions technologiques qui supportent les processus métiers, principalement les applications.",
            "title" => "Vue des applications",
            "title_short" => "Applications"
        ],
        "application_flow" => ["title" => "Vue des flux applicatifs", "title_short" => "Flux"],
        "ecosystem" => [
            "description" => "La vue de l’écosystème décrit l’ensemble des entités ou systèmes qui gravitent autour du système d’information considéré dans le cadre de la cartographie. Cette vue permet à la fois de délimiter le périmètre de la cartographie, mais aussi de disposer d’une vision d’ensemble de l’écosystème sans se limiter à l’étude individuelle de chaque entité.",
            "title" => "Vue de l'écosystème",
            "title_short" => "Écosystème"
        ],
        "logical_infrastructure" => [
            "description" => "La vue de l'infrastructure logique correspond à la répartition logique du réseau. Elle illustre le cloisonnement des réseaux et les liens logiques entre eux. En outre, elle répertorie les équipements réseau en charge du trafic.",
            "title" => "Vue des infrastructures logiques",
            "title_short" => "Infrastructure Logique"
        ],
        "metier" => [
            "description" => "La vue métier du système d’information décrit l’ensemble des processus métiers de l’organisme avec les acteurs qui y participent, indépendamment des choix technologiques faits par l’organisme et des ressources mises à sa disposition. La vue métier est essentielle, car elle permet de repositionner les éléments techniques dans leur environnement métier et ainsi de comprendre leur contexte d’emploi.",
            "title" => "Vue métier du système d’information",
            "title_short" => "Système d'Information"
        ],
        "physical_infrastructure" => [
            "description" => "La vue des infrastructures physiques décrit les équipements physiques qui composent le système d’information ou qui sont utilisés par celui-ci. Cette vue correspond à la répartition géographique des équipements réseaux au sein des différents sites.",
            "title" => "Vue de l'infrastructure physique",
            "title_short" => "Infrastructure Physique"
        ],
        "user_management" => ["title" => "Gestion des utilisateurs", "title_short" => "Utilisateurs"]
    ],
    "network" => [
        "description" => "Ensemble d’équipements reliés logiquement entre eux et qui échangent des informations.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "externalConnectedEntities" => "Entités externes connectées",
            "externalConnectedEntities_helper" => "Liste des entités externes connectées au réseau",
            "name" => "Nom",
            "name_helper" => "",
            "protocol_type" => "Type de protocole",
            "protocol_type_helper" => "",
            "responsible" => "Responsable d'exploitation",
            "responsible_helper" => "",
            "responsible_sec" => "Responsable SSI",
            "responsible_sec_helper" => "",
            "security_need" => "Besoins de sécurité (CIDT)",
            "security_need_helper" => "Besoins de sécurité du réseau",
            "subnetworks" => "Sous-réseaux",
            "subnetworks_helper" => "Liste des sous-réseaux rattachés"
        ],
        "title" => "Réseaux",
        "title_short" => "Réseaux",
        "title_singular" => "Réseau"
    ],
    "networkSwitch" => [
        "description" => "Composant gérant les connexions entre les différents serveurs au sein d’un réseau.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "Caractéristiques techniques",
            "ip" => "Adresse IP",
            "ip_helper" => "",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "Commutateurs réseau",
        "title_short" => "Commutateurs",
        "title_singular" => "Commutateur"
    ],
    "operation" => [
        "description" => "Etape d’une procédure correspondant à l’intervention d’un acteur dans le cadre d’une activité.",
        "fields" => [
            "activities" => "Activités",
            "activities_helper" => "Liste des activités parentes",
            "actors" => "Acteurs",
            "actors_helper" => "Liste des acteurs qui interviennent",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "tasks" => "Tâches",
            "tasks_helper" => "Liste des tâches qui la compose"
        ],
        "title" => "Opérations",
        "title_singular" => "Opération"
    ],
    "peripheral" => [
        "description" => "Composant physique connecté à un poste de travail aﬁn d’ajouter de nouvelles fonctionnalités (ex. : clavier, souris, imprimante, scanner, etc.).",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "",
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le périphérique",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "responsible" => "Responsable",
            "responsible_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le périphérique",
            "type" => "Type",
            "type_helper" => "Imprimante, scanner, etc."
        ],
        "title" => "Périphériques",
        "title_singular" => "Périphérique"
    ],
    "permission" => [
        "fields" => ["title" => "Title", "title_helper" => ""],
        "title" => "Permissions",
        "title_singular" => "Permission"
    ],
    "phone" => [
        "description" => "Téléphone ﬁxe ou portable appartenant à l’organisation.",
        "fields" => [
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le téléphone",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le téléphone",
            "type" => "Type",
            "type_helper" => ""
        ],
        "title" => "Téléphones",
        "title_singular" => "Téléphone"
    ],
    "physicalRouter" => [
        "description" => "Composant gérant les connexions entre différents réseaux.",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "",
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le routeur",
            "description" => "Description",
            "description_helper" => "Modèle, version du logiciel embarqué",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le routeur",
            "type" => "Type",
            "type_helper" => "Caractéristiques techniques : modèle, version du logiciel embarqué",
            "vlan" => "VLAN",
            "vlan_helper" => "VLAN associés"
        ],
        "title" => "Routeurs physiques",
        "title_short" => "Routeurs",
        "title_singular" => "Routeur physique"
    ],
    "physicalSecurityDevice" => [
        "description" => "Composant permettant la supervision du réseau, la détection d’incidents, la protection des équipements ou ayant une fonction de sécurisation du système d’information.",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "Baie dans laquelle se trouve le dispositif",
            "building" => "Bâtiment  / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le dispositif",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le dispositif",
            "type" => "Type",
            "type_helper" => ""
        ],
        "title" => "Équipements de sécurité physique",
        "title_short" => "Sécurité",
        "title_singular" => "Équipement de sécurité physique"
    ],
    "physicalServer" => [
        "description" => "Machine physique exécutant un ensemble de services informatiques.",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "Baie dans laquelle se trouve le serveur",
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le serveur",
            "configuration" => "Configuration",
            "configuration_helper" => "Caractéristiques techniques : configuration, OS et version",
            "description" => "Description",
            "description_helper" => "",
            "logical_servers" => "Serveurs logiques",
            "logical_servers_helper" => "Serveurs logiques installés sur ce serveur",
            "name" => "Nom",
            "name_helper" => "",
            "physical_switch" => "Commutateur",
            "physical_switch_helper" => "Commutateur auquel est connecté le serveur",
            "responsible" => "Responsable",
            "responsible_helper" => "Responsable d’exploitation",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le serveur",
            "type" => "Type",
            "type_helper" => "Type de serveur"
        ],
        "title" => "Serveurs physiques",
        "title_short" => "Serveurs",
        "title_singular" => "Serveur physique"
    ],
    "physicalSwitch" => [
        "description" => "Composant gérant les connexions entre les différents serveurs au sein d’un réseau.",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "",
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le commutateur",
            "description" => "Description",
            "description_helper" => "Caractéristiques techniques : niveau (L1, L2, L3, etc.), modèle, version du logiciel embarqué",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le commutateur",
            "type" => "Type",
            "type_helper" => "Caractéristiques techniques : niveau (L1, L2, L3, etc.), modèle, version du logiciel embarqué"
        ],
        "title" => "Commutateurs physiques",
        "title_short" => "Commutateurs",
        "title_singular" => "Commutateur physique"
    ],
    "process" => [
        "description" => "Ensemble d’activités concourant à un objectif. Le processus produit des informations (de sortie) à valeur ajoutée (sous forme de livrables) à partir d’informations (d’entrées) produites par d’autres processus.",
        "fields" => [
            "activities" => "Activités",
            "activities_helper" => "Liste des activités qui le composent",
            "applications" => "Applications soutenues",
            "applications_helper" => "Applications qui soutiennent ce processus",
            "description" => "Description",
            "description_helper" => "",
            "entities" => "Entités",
            "entities_helper" => "Liste des entités ou systèmes associés",
            "identifiant" => "Identifiant",
            "identifiant_helper" => "",
            "in_out" => "Éléments entrants et sortants",
            "in_out_helper" => "",
            "informations" => "Informations",
            "informations_helper" => "Informations utilisées par le process",
            "macroprocessus" => "Macro-processus",
            "macroprocessus_helper" => "Fait partie du macro-processus",
            "owner" => "Responsable",
            "owner_helper" => "Responsable du processus",
            "security_need" => "Besoins de sécurité (CIDT)",
            "security_need_helper" => "Besoins de sécurité du processus"
        ],
        "title" => "Processus",
        "title_singular" => "Processus"
    ],
    "relation" => [
        "description" => "Lien entre deux entités ou systèmes.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "destination" => "Destinataire",
            "destination_helper" => "Destinataire de la relation",
            "importance" => "Importance",
            "importance_helper" => "",
            "importance_level" => ["critical" => "Critique", "high" => "Fort", "low" => "Faible", "medium" => "Moyen"],
            "link" => "Lien",
            "name" => "Nom",
            "name_helper" => "Nom de la relation",
            "source" => "Source",
            "source_helper" => "Source de la relation",
            "type" => "Nature",
            "type_helper" => "Nature (ex. : fourniture de biens, de services, partenariat commercial, etc.)"
        ],
        "title" => "Relations",
        "title_singular" => "Relation"
    ],
    "report" => [
        "cartography" => [
            "administration" => "Administration",
            "applications" => "Applications",
            "ecosystem" => "Écosystème",
            "granularity" => "Granularité",
            "granularity_helper" => "Niveau de granularité du rapport",
            "information_system" => "Système d'information",
            "logical_infrastructure" => "Infrastructure logique",
            "physical_infrastructure" => "Infrastructure physique",
            "title" => "Rapport de Cartographie du Système d'Information",
            "views" => "Vues",
            "views_helper" => "Vues présentes dans le rapport"
        ],
        "lists" => [
            "applications" => "Applications par groupe applicatif",
            "applications_helper" => "Liste des applications par groupe applicatif",
            "entities" => "Entités et application supportées",
            "entities_helper" => "Liste des entités du système d'information et de leurs applications supportées",
            "logical_server_configurations" => "Configuration des serveurs logiques",
            "logical_server_configurations_helper" => "Liste de la configuration des serveurs logiques",
            "logical_servers" => "Serveurs logiques",
            "logical_servers_helper" => "Liste des serveurs logiques par applications et responsables",
            "physical_inventory" => "Inventaire de l'infrastructure physique",
            "physical_inventory_helper" => "Liste des équipements par site/local",
            "security_needs" => "Analyse des besoins de sécurité",
            "security_needs_helper" => "Liste des besoins de sécurité entre macro-processus, processus, applications, base de données et informations.",
            "title" => "Listes",
            "audit" => "Audit",
            "maturity" => "Niveaux de maturité",
            "maturity_helper" => "Liste les niveaux de maturité atteints par les différents objets de la cartographie",
            "changes" => "Mise à jour / changements",
            "changes_helper" => "Trace les changements realisés sur la cartographie les 12 derniers mois"
        ]
    ],
    "role" => [
        "fields" => [
            "permissions" => "Permissions",
            "permissions_helper" => "",
            "title" => "Title",
            "title_helper" => ""
        ],
        "title" => "Rôles",
        "title_singular" => "Rôle"
    ],
    "router" => [
        "description" => "Composant gérant les connexions entre différents réseaux.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "Caractéristiques techniques",
            "ip_addresses" => "Adresses IP du routeur",
            "ip_addresses_helper" => "Filtre : xxx.xxx.xxx.xxx, xxx.xxx.xxx.xxx, ...",
            "name" => "Nom",
            "name_helper" => "",
            "network_switches" => "Commutateurs",
            "network_switches_helper" => "Listes des commutateurs connectés",
            "rules" => "Règles de filtrage réseau",
            "rules_helper" => ""
        ],
        "title" => "Routeurs",
        "title_short" => "Routeurs",
        "title_singular" => "Routeur"
    ],
    "securityDevice" => [
        "fields" => [
            "description" => "Caractéristiques techniques",
            "description_helper" => "Type d’équipement (sonde, pare-feu, SIEM, etc.), modèle, OS et version, version du logiciel embarqué",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "Equipements de sécurité",
        "title_short" => "Sécurité",
        "title_singular" => "Équipement de sécurité"
    ],
    "site" => [
        "description" => "Emplacement géographique rassemblant un ensemble de personnes et/ou de ressources.",
        "fields" => [
            "buildings" => "Bâtiments / Salles",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "Sites",
        "title_singular" => "Site"
    ],
    "storageDevice" => [
        "description" => "Support physique ou réseau de stockage de données : serveur de stockage en réseau (NAS), réseau de stockage (SAN), disque dur…",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "",
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve le dispositif",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le dispositif"
        ],
        "title" => "Infrastructures de stockage",
        "title_short" => "Stockage",
        "title_singular" => "Infrastructure de stockage"
    ],
    "subnetwork" => [
        "description" => "Subdivision logique d’un réseau de taille plus importante.",
        "fields" => [
            "address" => "Plage IP : Adresse / Masque",
            "address_helper" => "Filtre : xxx.xxx.xxx.xxx / xx",
            "connected_subnets" => "Sous-réseaux",
            "connected_subnets_helper" => "Liste des sous-réseaux interconnectés",
            "default_gateway" => "Passerelle par défaut",
            "default_gateway_helper" => "Filtre: xxx.xxx.xxx.xxx",
            "description" => "Description",
            "description_helper" => "",
            "dmz" => "DMZ",
            "dmz_helper" => "Zone démilitarisée (Oui/Non)",
            "gateway" => "Passerelle",
            "gateway_helper" => "",
            "ip_allocation_type" => "Type d'allocation d'adresse IP",
            "ip_allocation_type_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "network" => "Réseau",
            "network_helper" => "Réseau auquel appartient ce sous-réseau",
            "responsible_exp" => "Responsable d'exploitation",
            "responsible_exp_helper" => "",
            "vlan" => "VLAN",
            "vlan_helper" => "VLAN associé (defaut: VLAN_1)",
            "wifi" => "WiFi",
            "wifi_helper" => "Accès au réseau Wifi (oui/non)",
            "zone" => "Zone",
            "zone_helper" => "Zone firewall (ZFB)"
        ],
        "title" => "Sous-réseaux",
        "title_short" => "Sous-réseaux",
        "title_singular" => "Sous-réseau"
    ],
    "task" => [
        "description" => "Activité élémentaire exercée par une fonction organisationnelle et constituant une unité indivisible de travail dans la chaîne de valeur ajoutée d’un processus.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "nom" => "Nom",
            "nom_helper" => ""
        ],
        "title" => "Tâches",
        "title_singular" => "Tâche"
    ],
    "user" => [
        "fields" => [
            "email" => "Email",
            "email_helper" => "",
            "email_verified_at" => "Email vérifié à",
            "email_verified_at_helper" => "",
            "granularity" => "Granularité",
            "granularity_1" => "Niveau 1",
            "granularity_2" => "Niveau 2",
            "granularity_3" => "Niveau 3",
            "granularity_helper" => "Niveau de granularité",
            "language" => "Langue",
            "language_de" => "allemand",
            "language_en" => "anglais",
            "language_fr" => "français",
            "language_helper" => "Langue de l'application",
            "name" => "Nom",
            "name_helper" => "",
            "password" => "Password",
            "password_helper" => "",
            "remember_token" => "Remember Token",
            "remember_token_helper" => "",
            "roles" => "Roles",
            "roles_helper" => ""
        ],
        "title" => "Utilisateurs",
        "title_singular" => "Utilisateur"
    ],
    "vlan" => [
        "description" => "Réseau local (LAN) virtuel permettant de regrouper logiquement des équipements en s’affranchissant des contraintes physiques.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "subnetworks" => "Sous-réseaux",
            "subnetworks_helper" => "Sous-réseaux rattachés"
        ],
        "title" => "VLAN - Virtual Local Area Network",
        "title_short" => "VLAN",
        "title_singular" => "VLAN - Virtual Local Area Network"
    ],
    "wan" => [
        "description" => "Réseau informatique reliant des équipements sur des distances importantes. Il interconnecte généralement des MAN ou LAN entre eux.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "lans" => "LANs rattachés",
            "lans_helper" => "",
            "mans" => "MANs rattachés",
            "mans_helper" => "",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "WAN - Wide Area Network",
        "title_short" => "WAN",
        "title_singular" => "WAN - Wide Area Network"
    ],
    "wifiTerminal" => [
        "description" => "Matériel permettant l’accès au réseau sans fil wifi.",
        "fields" => [
            "bay" => "Baie",
            "bay_helper" => "",
            "building" => "Bâtiment",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve la borne wifi",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve la borne wifi",
            "type" => "Type",
            "type_helper" => ""
        ],
        "title" => "Bornes Wifi",
        "title_short" => "Wifi",
        "title_singular" => "Borne Wifi"
    ],
    "workstation" => [
        "description" => "Machine physique permettant à un utilisateur d’accéder au système d’information.",
        "fields" => [
            "building" => "Bâtiment / Salle",
            "building_helper" => "Bâtiment / Salle dans lequel se trouve la station de travail",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Nom",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site sur lequel se trouve le poste de travail",
            "type" => "Type",
            "type_helper" => "Type de poste de travail"
        ],
        "title" => "Postes de travail",
        "title_singular" => "Poste de travail"
    ],
    "zoneAdmin" => [
        "description" => "Ensemble de ressources (personnes, données, équipements) sous la responsabilité d’un (ou plusieurs) administrateur(s).",
        "fields" => [
            "annuaires" => "Annuaires",
            "description" => "Description",
            "description_helper" => "",
            "forests" => "Forêts Active Directory / Arborescences LDAP",
            "name" => "Nom",
            "name_helper" => ""
        ],
        "title" => "Zones d'administration",
        "title_short" => "Zones",
        "title_singular" => "Zone d'administration"
    ]
];
