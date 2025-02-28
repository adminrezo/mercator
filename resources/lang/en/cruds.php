<?php
return [
    "activity" => [
        "description" => "Step necessary for the completion of a process. It corresponds to specific know-how and not necessarily to an organizational structure of the company.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "Description of the operation",
            "name" => "Name",
            "name_helper" => "Operation Name",
            "operations" => "Operations",
            "operations_helper" => "List of operations carried out",
            "processes" => "Process",
            "processes_helper" => "List of parent processes"
        ],
        "title" => "Activities",
        "title_singular" => "Activity"
    ],
    "actor" => [
        "description" => "Representative of a business role that executes operations, uses applications and makes decisions in processes. This role can be carried by a person, a group of people or an entity.",
        "fields" => [
            "contact" => "Contact",
            "contact_helper" => "contact method",
            "name" => "Name",
            "name_helper" => "Actor's name",
            "nature" => "Nature",
            "nature_helper" => "Ex: person, group, entity, etc.",
            "operations" => "Operations",
            "operations_helper" => "List of operations in which the actor participates",
            "type" => "Type",
            "type_helper" => "internal or external to the organization"
        ],
        "title" => "Actors",
        "title_singular" => "Actor"
    ],
    "administration" => [
        "title" => "Administration view",
        "title_short" => "Administration",
        "title_singular" => "Administration view"
    ],
    "annuaire" => [
        "description" => "Application gathering data on users or computer equipment of the company and allowing their administration.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "solution" => "solution",
            "solution_helper" => "",
            "zone_admin" => "Admin Zone",
            "zone_admin_helper" => ""
        ],
        "title" => "Administration Directory Services",
        "title_short" => "Directories",
        "title_singular" => "Administration Directory Service"
    ],
    "application" => [
        "description" => "Coherent set of computer objects (executables, programs, data ...). It constitutes a grouping of application services.",
        "fields" => [
            "application_block" => "Application block",
            "application_block_helper" => "Application block of which this application is part",
            "databases" => "Data base",
            "databases_helper" => "List of databases used by the application",
            "description" => "Description",
            "description_helper" => "",
            "documentation" => "Documentation",
            "documentation_helper" => "Link to documentation",
            "entities" => "Entities",
            "entities_helper" => "List of user entities",
            "entity_resp" => "Operation",
            "entity_resp_helper" => "Entity responsible for operations",
            "external" => "External exposure",
            "external_helper" => "ex. : Software as a Service - SaaS type solution",
            "flux" => "Flows",
            "flux_helper" => "Associated flows",
            "logical_servers" => "Logical Servers",
            "logical_servers_helper" => "List of logical servers supporting the application",
            "name" => "Name",
            "name_helper" => "",
            "processes" => "Process",
            "processes_helper" => "List of processes supported by the application",
            "responsible" => "Responsible",
            "responsible_helper" => "Team or persons responsible for the application",
            "security_need" => "Security needs",
            "security_need_helper" => "Application security needs",
            "services" => "Services",
            "services_helper" => "List of application services delivered by the application",
            "technology" => "Technology",
            "technology_helper" => "Type of technology: loud client, web, etc.",
            "type" => "Type of application",
            "type_helper" => "ex: dev. internal, software, firmware, script, EAI / ESB, etc.",
            "users" => "Users",
            "users_helper" => "Volume of users and profiles",
            "version" => "Version",
            "version_helper" => "Application's version"
        ],
        "title" => "Applications",
        "title_short" => "Applications",
        "title_singular" => "Application"
    ],
    "applicationBlock" => [
        "description" => "Set of applications.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "Applications that are part of this application block",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "responsible" => "Responsible",
            "responsible_helper" => "Responsible for the applications of this application block"
        ],
        "title" => "Application blocks",
        "title_singular" => "Application block"
    ],
    "applicationModule" => [
        "description" => "Component of an application characterized by functional consistency in IT and technological homogeneity.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "flux" => "Flows",
            "flux_helper" => "Flows associated with the module",
            "name" => "Name",
            "name_helper" => "",
            "services" => "Services",
            "services_helper" => "Services that use this module"
        ],
        "title" => "Application modules",
        "title_short" => "Modules",
        "title_singular" => "Application Module"
    ],
    "applicationService" => [
        "description" => "Application breakdown element made available to the end user as part of their work. An application service can, for example, be a cloud service.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "List of applications that use this application service",
            "description" => "Description",
            "description_helper" => "",
            "exposition" => "exposure",
            "exposition_helper" => "External exposure (e.g. cloud service, cloud)",
            "flux" => "Flows",
            "flux_helper" => "Associated flows",
            "modules" => "Modules",
            "modules_helper" => "List of modules that make up this application service",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "Application Services",
        "title_short" => "Services",
        "title_singular" => "Application service"
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
            "subject_type" => "Subject type",
            "subject_type_helper" => "",
            "user_id" => "User ID",
            "user_id_helper" => ""
        ],
        "title" => "Audits Logs",
        "title_singular" => "Audit Log"
    ],
    "bay" => [
        "description" => "Technical cabinet bringing together computer network or telephone equipment.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "peripherals" => "Peripheral devices",
            "physical_routers" => "Physical routers",
            "physical_security_devices" => "Physical security devices",
            "physical_servers" => "Physical servers",
            "physical_switches" => "Physical switches",
            "room" => "Building / Room",
            "room_helper" => "",
            "storage_devices" => "Storage devices"
        ],
        "title" => "Bays",
        "title_singular" => "Bay"
    ],
    "building" => [
        "description" => "Location of people or resources within a site.",
        "fields" => [
            "badge" => "Badge",
            "badge_helper" => "Access is protected by a badge reader",
            "bays" => "Bays",
            "bays_helper" => "",
            "camera" => "Camera",
            "camera_helper" => "The room is equipped with a camera",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where this building / room is located"
        ],
        "title" => "Buildings / Rooms",
        "title_singular" => "Building / Room"
    ],
    "certificate" => [
        "description" => "An electronic certificate (also called a digital certificate or public key certificate) can be thought of as a digital identity card. It is mainly used to identify and authenticate a natural or legal person, but also to encrypt exchanges.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "Applications where this certificate is installed",
            "description" => "Description",
            "description_helper" => "Certificate Description",
            "end_validity" => "End date",
            "end_validity_helper" => "Certificate Expiry Date",
            "logical_servers" => "Logical Servers",
            "logical_servers_helper" => "Logical servers where this certificate is installed",
            "name" => "Name",
            "name_helper" => "Certificate name",
            "start_validity" => "Start date",
            "start_validity_helper" => "Certificate validity start date",
            "type" => "Type",
            "type_helper" => "Certificate Type"
        ],
        "title" => "Certificates",
        "title_short" => "Certificates",
        "title_singular" => "Certificate"
    ],
    "configuration" => [
        "certificate" => [
            "delay" => "certificates that expire in",
            "message_subject" => "Subject",
            "recurence" => "Every",
            "sent_from" => "Sent from",
            "title" => "Certificate expiration",
            "to" => "to"
        ],
        "title" => "Configuration",
        "title_singular" => "Configuration"
    ],
    "database" => [
        "description" => "Structured and ordered set of information intended to be exploited by computer.",
        "fields" => [
            "applications" => "Applications",
            "applications_helper" => "List of applications that use the database",
            "description" => "Description",
            "description_helper" => "",
            "entities" => "User Entity",
            "entities_helper" => "List of user entity (ies)",
            "entity_resp" => "Responsible entity",
            "entity_resp_helper" => "Entity responsible for the operation",
            "external" => "External exposure",
            "external_helper" => "ex: Internal / External / Local",
            "flux" => "Flows",
            "flux_helper" => "Associated flows",
            "informations" => "Information",
            "informations_helper" => "List of information contained in the database",
            "name" => "Name",
            "name_helper" => "Name of the data base",
            "responsible" => "SSI Manager",
            "responsible_helper" => "",
            "security_need" => "Security needs (CIAT)",
            "security_need_helper" => "Database security requirements",
            "type" => "Type of technology",
            "type_helper" => "ex: mySQL, Oracle, SQL Server"
        ],
        "title" => "Data base",
        "title_singular" => "Database"
    ],
    "dhcpServer" => [
        "description" => "Physical or virtual equipment allowing the management of the IP addresses of a network.",
        "fields" => [
            "address_ip" => "IP adress",
            "address_ip_helper" => "Filter: xxx.xxx.xxx.xxx",
            "description" => "Description",
            "description_helper" => "Technical characteristics: model, OS and version",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "DHCP servers",
        "title_singular" => "DHCP Server"
    ],
    "dnsserver" => [
        "description" => "Domain Name System (Domain Name System) - Physical or virtual equipment allowing the conversion of a domain name into an IP address.",
        "fields" => [
            "address_ip" => "IP adress",
            "address_ip_helper" => "Filter: xxx.xxx.xxx.xxx",
            "description" => "Description",
            "description_helper" => "Technical characteristics: model, OS and version",
            "name" => "Name",
            "name_helper" => "DNS server name"
        ],
        "title" => "Dns servers",
        "title_singular" => "DNS server"
    ],
    "domaineAd" => [
        "description" => "Set of elements (members, resources) governed by the same security policy.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "domain_ctrl_cnt" => "Number of domain controllers",
            "domain_ctrl_cnt_helper" => "",
            "forestAds" => "Active Directory Forests / LDAP Trees",
            "machine_count" => "Number of Machines",
            "machine_count_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "relation_inter_domaine" => "Inter Domain Relationship",
            "relation_inter_domaine_helper" => "",
            "user_count" => "Number of user accounts",
            "user_count_helper" => ""
        ],
        "title" => "Active Directory / LDAP domains",
        "title_short" => "Active Directory",
        "title_singular" => "Active Directory / LDAP domain"
    ],
    "entity" => [
        "description" => "Part of the organization (eg: subsidiary, department, etc.) or information system in relation to the IS which aims to be mapped.",
        "fields" => [
            "applications_resp" => "Applications",
            "applications_resp_helper" => "Responsible for application operations",
            "contact_point" => "Point-of-contact",
            "contact_point_helper" => "",
            "databases_resp" => "Data base",
            "databases_resp_helper" => "Responsible for database operations",
            "description" => "Description",
            "description_helper" => "",
            "exploits" => "exploits",
            "name" => "Name",
            "name_helper" => "Name of entity or system",
            "processes" => "Supported processes",
            "processes_helper" => "List of processes supported by the entity",
            "relations" => "Relationships",
            "relations_helper" => "Relations with other entities",
            "security_level" => "Security Level",
            "security_level_helper" => "ex. : maturity, security measures in place or defined at the contractual level, degree of confidence, approval"
        ],
        "title" => "Entities",
        "title_singular" => "Entity"
    ],
    "externalConnectedEntity" => [
        "description" => "External entities connected to the network.",
        "fields" => [
            "connected_networks" => "Connected networks",
            "connected_networks_helper" => "Internal networks connected to the entity",
            "contacts" => "SI contacts",
            "contacts_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "responsible_sec" => "SSI Manager",
            "responsible_sec_helper" => ""
        ],
        "title" => "Connected external entities",
        "title_short" => "Entities",
        "title_singular" => "External entity connected"
    ],
    "flux" => [
        "description" => "Exchange of information between a sender or a receiver (application service, application or actor).",
        "fields" => [
            "application_dest" => "Recipient application",
            "application_dest_helper" => "",
            "application_source" => "Application Source",
            "application_source_helper" => "",
            "bidirectional" => "Bidirectional",
            "bidirectional_helper" => "The flow is bidirectional",
            "crypted" => "Encryption",
            "crypted_helper" => "The flow is encrypted",
            "database_dest" => "Recipient Database",
            "database_dest_helper" => "",
            "database_source" => "Database Source",
            "database_source_helper" => "",
            "description" => "Description",
            "description_helper" => "",
            "destination" => "Destination",
            "module_dest" => "Recipient module",
            "module_dest_helper" => "",
            "module_source" => "Source module",
            "module_source_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "service_dest" => "Recipient Service",
            "service_dest_helper" => "",
            "service_source" => "Service Source",
            "service_source_helper" => "",
            "source" => "Source"
        ],
        "title" => "Flows",
        "title_singular" => "Flow"
    ],
    "forestAd" => [
        "description" => "Organized grouping of Active Directory / LDAP domains.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "domaines" => "areas",
            "domaines_helper" => "Domains belonging to the forest / tree",
            "name" => "Name",
            "name_helper" => "",
            "zone_admin" => "Administration area",
            "zone_admin_helper" => ""
        ],
        "title" => "Active Directory / LDAP forests",
        "title_short" => "LDAP",
        "title_singular" => "Active Directory / LDAP forest"
    ],
    "gateway" => [
        "description" => "Components for connecting a local network with the outside.",
        "fields" => [
            "authentification" => "Authentication type",
            "authentification_helper" => "",
            "description" => "Technical characteristics",
            "description_helper" => "",
            "ip" => "Public and private IP",
            "ip_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "subnetworks" => "Connected subnets",
            "subnetworks_helper" => "Subnets accessible from the gateway"
        ],
        "title" => "Entrance gateways from the outside",
        "title_short" => "Gateways",
        "title_singular" => "Entrance gateway from the outside"
    ],
    "information" => [
        "description" => "Data subject to computer processing.",
        "fields" => [
            "administrator" => "Administrator",
            "administrator_helper" => "",
            "constraints" => "Constraints",
            "constraints_helper" => "Regulatory and normative constraints",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "owner" => "Owner",
            "owner_helper" => "",
            "processes" => "Process",
            "processes_helper" => "Related processes",
            "security_need" => "Security needs (CIAT)",
            "security_need_helper" => "Information security needs",
            "sensitivity" => "SENSITIVITY",
            "sensitivity_helper" => "Personal data, medical data, classified data, etc.",
            "storage" => "Storage",
            "storage_helper" => "Storage (type, location)"
        ],
        "title" => "Information",
        "title_singular" => "Information"
    ],
    "lan" => [
        "description" => "Computer network connecting equipment over a small geographic area.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "LAN - Local Area Network",
        "title_short" => "LAN",
        "title_singular" => "LAN - Local Area Network"
    ],
    "logicalServer" => [
        "description" => "Logical division of a physical server.",
        "fields" => [
            "address_ip" => "IP address (es)",
            "address_ip_helper" => "Filter: xxx.xxx.xxx.xxx, xxx.xxx.xxx.xxx, ...",
            "applications" => "Applications",
            "applications_helper" => "Installed apps",
            "certificates" => "Certificates",
            "certificates_helper" => "Certificates installed on this server",
            "configuration" => "Configuration",
            "configuration_helper" => "Other technical characteristics",
            "cpu" => "CPU",
            "cpu_helper" => "Number of CPU",
            "description" => "Description",
            "description_helper" => "",
            "disk" => "Disk",
            "disk_helper" => "Allocated disk space (GB)",
            "environment" => "Environment",
            "environment_helper" => "Prod, Preprod, Test, Dev, Integration, ...",
            "memory" => "Memory",
            "memory_helper" => "Amount of memory allocated",
            "name" => "Name",
            "name_helper" => "",
            "net_services" => "Active network services",
            "net_services_helper" => "",
            "operating_system" => "Operating System",
            "operating_system_helper" => "OS name and version",
            "servers" => "Physical servers",
            "servers_helper" => "Support physical server"
        ],
        "title" => "Logical Servers",
        "title_short" => "Servers",
        "title_singular" => "Logical Server"
    ],
    "macroProcessus" => [
        "description" => "Set of macro-processes.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "io_elements" => "Incoming and outgoing elements",
            "io_elements_helper" => "",
            "name" => "Name",
            "name_helper" => "Macro-process name",
            "owner" => "Owner",
            "owner_helper" => "Macro-process owner",
            "processes" => "Process",
            "processes_helper" => "List of the processes that compose it",
            "security_need" => "Security needs (CIAT)",
            "security_need_helper" => "Macro-process security needs"
        ],
        "title" => "Macro-process",
        "title_singular" => "Macro-process"
    ],
    "man" => [
        "description" => "Computer network connecting equipment over moderately large distances. It usually interconnects LANs with each other.",
        "fields" => [
            "lans" => "Attached LANs",
            "lans_helper" => "",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "MAN - Middle Area Network",
        "title_short" => "MAN",
        "title_singular" => "MAN - Middle Area Network"
    ],
    "menu" => [
        "administration" => [
            "description" => "The administration view is a special case of the application view. It lists the perimeters and the privilege levels of the administrators.",
            "title" => "Administration view",
            "title_short" => "Administration"
        ],
        "application" => [
            "description" => "The applications view makes it possible to describe part of what is conventionally called the “computer system”. This view describes the technological solutions that support business processes, primarily applications.",
            "title" => "Applications view",
            "title_short" => "Applications"
        ],
        "application_flow" => ["title" => "View of application flows", "title_short" => "Flow"],
        "ecosystem" => [
            "description" => "The ecosystem view describes all the entities or systems that revolve around the information system considered in the context of the mapping. This view allows both to delimit the perimeter of the mapping, but also to have an overview of the ecosystem without being limited to the individual study of each entity.",
            "title" => "Ecosystem view",
            "title_short" => "Ecosystem"
        ],
        "logical_infrastructure" => [
            "description" => "The logical infrastructure view is the logical distribution of the network. It illustrates the compartmentalization of networks and the logical links between them. In addition, it lists the network devices in charge of the traffic.",
            "title" => "View of logical infrastructures",
            "title_short" => "Logical infrastructure"
        ],
        "metier" => [
            "description" => "The business view of the information system describes all of the organization's business processes with the actors who participate in them, regardless of the technological choices made by the organization and the resources made available to it. The business view is essential because it allows technical elements to be repositioned in their business environment and thus to understand their employment context.",
            "title" => "Business view of the information system",
            "title_short" => "Information system"
        ],
        "physical_infrastructure" => [
            "description" => "The physical infrastructure view describes the physical equipment that makes up or is used by the information system. This view corresponds to the geographical distribution of network equipment within the various sites.",
            "title" => "View of the physical infrastructure",
            "title_short" => "Physical infrastructure"
        ],
        "user_management" => ["title" => "User management", "title_short" => "Users"]
    ],
    "network" => [
        "description" => "Set of equipment logically linked to each other and which exchange information.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "externalConnectedEntities" => "Connected external entities",
            "externalConnectedEntities_helper" => "List of external entities connected to the network",
            "name" => "Name",
            "name_helper" => "",
            "protocol_type" => "Protocol Type",
            "protocol_type_helper" => "",
            "responsible" => "Operations manager",
            "responsible_helper" => "",
            "responsible_sec" => "SSI Manager",
            "responsible_sec_helper" => "",
            "security_need" => "Security needs (CIAT)",
            "security_need_helper" => "Network security needs",
            "subnetworks" => "Subnets",
            "subnetworks_helper" => "List of subnets attached"
        ],
        "title" => "Networks",
        "title_short" => "Networks",
        "title_singular" => "Network"
    ],
    "networkSwitch" => [
        "description" => "Component that manages the connections between the different servers in a network.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "Technical characteristics",
            "ip" => "IP adress",
            "ip_helper" => "",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "Network switches",
        "title_short" => "Switches",
        "title_singular" => "Switch"
    ],
    "operation" => [
        "description" => "Stage of a procedure corresponding to the intervention of an actor in the context of an activity.",
        "fields" => [
            "activities" => "Activities",
            "activities_helper" => "List of parent activities",
            "actors" => "Actors",
            "actors_helper" => "List of actors involved",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "tasks" => "Tasks",
            "tasks_helper" => "List of tasks that compose it"
        ],
        "title" => "Operations",
        "title_singular" => "Surgery"
    ],
    "peripheral" => [
        "description" => "Physical component connected to a workstation in order to add new functionalities (eg: keyboard, mouse, printer, scanner, etc.).",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "",
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the ring road is located",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "responsible" => "Responsible",
            "responsible_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the device is located",
            "type" => "Type",
            "type_helper" => "Printer, scanner, etc."
        ],
        "title" => "Peripheral devices",
        "title_singular" => "Peripheral"
    ],
    "permission" => [
        "fields" => ["title" => "title", "title_helper" => ""],
        "title" => "Permissions",
        "title_singular" => "Permission"
    ],
    "phone" => [
        "description" => "Fixed or mobile phone belonging to the organization.",
        "fields" => [
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the telephone is located",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the phone is located",
            "type" => "Type",
            "type_helper" => ""
        ],
        "title" => "Phones",
        "title_singular" => "Phone"
    ],
    "physicalRouter" => [
        "description" => "Component managing connections between different networks.",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "",
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the router is located",
            "description" => "Description",
            "description_helper" => "Model, embedded software version",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the router is located",
            "type" => "Type",
            "type_helper" => "Technical characteristics: model, version of the embedded software",
            "vlan" => "Vlan",
            "vlan_helper" => "Associated VLANs"
        ],
        "title" => "Physical routers",
        "title_short" => "Routers",
        "title_singular" => "Physical Router"
    ],
    "physicalSecurityDevice" => [
        "description" => "Component allowing network supervision, incident detection, equipment protection or having a function of securing the information system.",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "",
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the device is located",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the device is located",
            "type" => "Type",
            "type_helper" => ""
        ],
        "title" => "Physical security equipment",
        "title_short" => "Security",
        "title_singular" => "Physical security equipment"
    ],
    "physicalServer" => [
        "description" => "Physical machine running a set of computer services.",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "Bay in which the server is located",
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the server is located",
            "configuration" => "Configuration",
            "configuration_helper" => "Technical characteristics: configuration, OS and version",
            "description" => "Description",
            "description_helper" => "",
            "logical_servers" => "Logical Servers",
            "logical_servers_helper" => "Logical servers installed on this server",
            "name" => "Name",
            "name_helper" => "",
            "physical_switch" => "Switch",
            "physical_switch_helper" => "Switch to which the server is connected",
            "responsible" => "Responsible",
            "responsible_helper" => "Operations manager",
            "site" => "Site",
            "site_helper" => "Site where the server is located",
            "type" => "Type",
            "type_helper" => "Server Type"
        ],
        "title" => "Physical servers",
        "title_short" => "Servers",
        "title_singular" => "Physical Server"
    ],
    "physicalSwitch" => [
        "description" => "Component managing the connections between the different servers within a network.",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "",
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the switch is located",
            "description" => "Description",
            "description_helper" => "Technical characteristics: level (L1, L2, L3, etc.), model, version of the embedded software",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the switch is located",
            "type" => "Type",
            "type_helper" => "Technical characteristics: level (L1, L2, L3, etc.), model, version of the embedded software"
        ],
        "title" => "Physical switches",
        "title_short" => "Switches",
        "title_singular" => "Physical switch"
    ],
    "process" => [
        "description" => "Set of activities that contribute to a goal. The process produces value-added (output) information (in the form of deliverables) from information (inputs) produced by other processes.",
        "fields" => [
            "activities" => "Activities",
            "activities_helper" => "List of activities that compose it",
            "applications" => "Supported applications",
            "applications_helper" => "Applications that support this process",
            "description" => "Description",
            "description_helper" => "",
            "entities" => "Entities",
            "entities_helper" => "List of associated entities or systems",
            "identifiant" => "Login",
            "identifiant_helper" => "",
            "in_out" => "Incoming and outgoing elements",
            "in_out_helper" => "",
            "informations" => "Information",
            "informations_helper" => "Information used by the process",
            "macroprocessus" => "Macro-process",
            "macroprocessus_helper" => "Part of the macro-process",
            "owner" => "Responsible",
            "owner_helper" => "Responsible for the process",
            "security_need" => "Security needs (CIAT)",
            "security_need_helper" => "Process security needs"
        ],
        "title" => "Process",
        "title_singular" => "Process"
    ],
    "relation" => [
        "description" => "Link between two entities or systems.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "destination" => "Recipient",
            "destination_helper" => "Recipient of the relationship",
            "importance" => "Importance",
            "importance_helper" => "",
            "importance_level" => ["critical" => "Critical", "high" => "Strong", "low" => "Low", "medium" => "Way"],
            "link" => "Link",
            "name" => "Name",
            "name_helper" => "Name of the relationship",
            "source" => "Source",
            "source_helper" => "Source of relationship",
            "type" => "Nature",
            "type_helper" => "Nature (e.g. supply of goods, services, commercial partnership, etc.)"
        ],
        "title" => "Relationships",
        "title_singular" => "Relationship"
    ],
    "report" => [
        "cartography" => [
            "administration" => "Administration",
            "applications" => "Applications",
            "ecosystem" => "Ecosystem",
            "granularity" => "Granularity",
            "granularity_helper" => "Report granularity level",
            "information_system" => "Information system",
            "logical_infrastructure" => "Logical infrastructure",
            "physical_infrastructure" => "Physical infrastructure",
            "title" => "Information System Mapping Report",
            "views" => "Views",
            "views_helper" => "Views in the report"
        ],
        "lists" => [
            "applications" => "Applications by application group",
            "applications_helper" => "List of applications by application group",
            "entities" => "Supported entities and applications",
            "entities_helper" => "List of information system entities and their supported applications",
            "logical_server_configurations" => "Configuring logical servers",
            "logical_server_configurations_helper" => "Logical server configuration list",
            "logical_servers" => "Logical Servers",
            "logical_servers_helper" => "List of logical servers by applications and managers",
            "physical_inventory" => "Physical infrastructure inventory",
            "physical_inventory_helper" => "List of equipment by site / local",
            "security_needs" => "Security needs analysis",
            "security_needs_helper" => "List of security needs between macro-processes, processes, applications, database and information.",
            "title" => "Lists"
        ]
    ],
    "role" => [
        "fields" => [
            "permissions" => "Permissions",
            "permissions_helper" => "",
            "title" => "title",
            "title_helper" => ""
        ],
        "title" => "Roles",
        "title_singular" => "Role"
    ],
    "router" => [
        "description" => "Component managing connections between different networks.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "Technical characteristics",
            "ip_addresses" => "Router IP addresses",
            "ip_addresses_helper" => "Filter: xxx.xxx.xxx.xxx, xxx.xxx.xxx.xxx, ...",
            "name" => "Name",
            "name_helper" => "",
            "network_switches" => "Switches",
            "network_switches_helper" => "Lists of connected switches",
            "rules" => "Network filtering rules",
            "rules_helper" => ""
        ],
        "title" => "Routers",
        "title_short" => "Routers",
        "title_singular" => "Router"
    ],
    "securityDevice" => [
        "fields" => [
            "description" => "Technical characteristics",
            "description_helper" => "Type of equipment (probe, firewall, SIEM, etc.), model, OS and version, version of the embedded software",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "Security equipment",
        "title_short" => "security",
        "title_singular" => "Security equipment"
    ],
    "site" => [
        "description" => "Geographic location bringing together a set of people and / or resources.",
        "fields" => [
            "buildings" => "Buildings / Rooms",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "Sites",
        "title_singular" => "Site"
    ],
    "storageDevice" => [
        "description" => "Physical medium or data storage network: network storage server (NAS), storage network (SAN), hard drive, etc.",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "",
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the device is located",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the device is located"
        ],
        "title" => "Storage infrastructure",
        "title_short" => "Storage",
        "title_singular" => "Storage infrastructure"
    ],
    "subnetwork" => [
        "description" => "Logical subdivision of a larger network.",
        "fields" => [
            "address" => "IP range: Address / Mask",
            "address_helper" => "Filter: xxx.xxx.xxx.xxx / xx",
            "connected_subnets" => "Subnets",
            "connected_subnets_helper" => "List of interconnected subnets",
            "default_gateway" => "Default gateway",
            "default_gateway_helper" => "Filter: xxx.xxx.xxx.xxx",
            "description" => "Description",
            "description_helper" => "",
            "dmz" => "DMZ",
            "dmz_helper" => "Demilitarized Zone (Yes / No)",
            "gateway" => "Bridge",
            "gateway_helper" => "",
            "ip_allocation_type" => "Type of IP address allocation",
            "ip_allocation_type_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "network" => "Network",
            "network_helper" => "Network to which this subnet belongs",
            "responsible_exp" => "Operations manager",
            "responsible_exp_helper" => "",
            "vlan" => "Vlan",
            "vlan_helper" => "Associated VLAN (default: VLAN_1)",
            "wifi" => "Wireless",
            "wifi_helper" => "Access to the Wifi network (yes / no)",
            "zone" => "Zoned",
            "zone_helper" => "Firewall zone (ZFB)"
        ],
        "title" => "Subnets",
        "title_short" => "Subnets",
        "title_singular" => "Subnet"
    ],
    "task" => [
        "description" => "Elementary activity performed by an organizational function and constituting an indivisible unit of work in the added value chain of a process.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "nom" => "Name",
            "nom_helper" => ""
        ],
        "title" => "Tasks",
        "title_singular" => "Task"
    ],
    "user" => [
        "fields" => [
            "email" => "e-mail",
            "email_helper" => "",
            "email_verified_at" => "Email verified to",
            "email_verified_at_helper" => "",
            "granularity" => "Granularity",
            "granularity_1" => "Level 1",
            "granularity_2" => "Level 2",
            "granularity_3" => "Level 3",
            "granularity_helper" => "Level of granularity",
            "language" => "Language",
            "language_de" => "German",
            "language_en" => "English",
            "language_fr" => "French",
            "language_helper" => "Application language",
            "name" => "Name",
            "name_helper" => "",
            "password" => "Password",
            "password_helper" => "",
            "remember_token" => "Remember Token",
            "remember_token_helper" => "",
            "roles" => "Roles",
            "roles_helper" => ""
        ],
        "title" => "Users",
        "title_singular" => "User"
    ],
    "vlan" => [
        "description" => "Virtual local area network (LAN) for logically grouping equipment without physical constraints.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "subnetworks" => "Subnets",
            "subnetworks_helper" => "Attached subnets"
        ],
        "title" => "VLAN - Virtual Local Area Network",
        "title_short" => "Vlan",
        "title_singular" => "VLAN - Virtual Local Area Network"
    ],
    "wan" => [
        "description" => "Computer network connecting equipment over long distances. It usually interconnects MANs or LANs with each other.",
        "fields" => [
            "description" => "Description",
            "description_helper" => "",
            "lans" => "Attached LANs",
            "lans_helper" => "",
            "mans" => "Attached MANs",
            "mans_helper" => "",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "WAN - Wide Area Network",
        "title_short" => "WAN",
        "title_singular" => "WAN - Wide Area Network"
    ],
    "wifiTerminal" => [
        "description" => "Hardware allowing access to the wireless wifi network.",
        "fields" => [
            "bay" => "Bay",
            "bay_helper" => "",
            "building" => "Building",
            "building_helper" => "Building / Room in which the wifi terminal is located",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the wifi terminal is located",
            "type" => "Type",
            "type_helper" => ""
        ],
        "title" => "Wifi terminals",
        "title_short" => "Wireless",
        "title_singular" => "WiFi hotspot"
    ],
    "workstation" => [
        "description" => "Physical machine allowing a user to access the information system.",
        "fields" => [
            "building" => "Building / Room",
            "building_helper" => "Building / Room in which the workstation is located",
            "description" => "Description",
            "description_helper" => "",
            "name" => "Name",
            "name_helper" => "",
            "site" => "Site",
            "site_helper" => "Site where the workstation is located",
            "type" => "Type",
            "type_helper" => "Type of workstation"
        ],
        "title" => "Workstations",
        "title_singular" => "Workstation"
    ],
    "zoneAdmin" => [
        "description" => "Set of resources (people, data, equipment) under the responsibility of one (or more) administrator (s).",
        "fields" => [
            "annuaires" => "Directories",
            "description" => "Description",
            "description_helper" => "",
            "forests" => "Active Directory Forests / LDAP Trees",
            "name" => "Name",
            "name_helper" => ""
        ],
        "title" => "Administration areas",
        "title_short" => "Zones",
        "title_singular" => "Administration area"
    ]
];
