(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.Nom || client.Nom.indexOf(filter.Nom) > -1)
                    && (filter.Distance === undefined || client.Distance === filter.Distance)
                    && (!filter.Nature || client.Nature.indexOf(filter.Nature) > -1)
                    && (!filter.Caractéristiques || client.Caractéristiques === filter.Caractéristiques)
                    && (filter.Status === undefined || client.Status === filter.Status);
            });
        },

        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },

        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }

    };

    window.db = db;


    db.countries = [
        { Nom: "", Id: 0 },
        { Nom: "Gazeuse", Id: 1 },
        { Nom: "Telluriques", Id: 2 },
       
    ];

    db.clients = [
        {
            "Nom": "MERCURE",
            "Distance": 61,
            "Caractéristiques": 2,
            "Nature": "Atmosphère mince",
            "Status": false
        },
        {
            "Nom": "VENUS",
            "Distance": 73,
            "Caractéristiques": 2,
            "Nature": "Taille similaire à la terre",
            "Status": false
        },
        {
            "Nom": "TERRE",
            "Distance": 29,
            "Caractéristiques": 2,
            "Nature": "Atmosphère respirable,plusieurs forme de vie ",
            "Status": true
        },
        {
            "Nom": "MARS",
            "Distance": 78,
            "Caractéristiques": 2,
            "Nature": "Planète rouge",
            "Status": true
        },
        {
            "Nom": "JUPITER",
            "Distance": 43,
            "Caractéristiques": 1,
            "Nature": "La plus grande planète, plusieurs lunes",
            "Status": false
        },
        {
            "Nom": "SATURNE",
            "Distance": 51,
            "Caractéristiques": 1,
            "Nature": "Planètes avec anneau",
            "Status": false
        },
        {
            "Nom": "URANUS",
            "Distance": 59,
            "Caractéristiques": 1,
            "Nature": "Planète géante",
            "Status": true
        },
        {
            "Nom": "NEPTUNE",
            "Distance": 58,
            "Caractéristiques": 1,
            "Nature": "Ressemblance à la terre",
            "Status": true
        },
        {
            "Nom": "PLUTON",
            "Distance": 62,
            "Caractéristiques": 1,
            "Nature": "Planète naine",
            "Status": true
        },
        {
            "Nom": "LUNE",
            "Distance": 39,
            "Nature": "Sattélitte naturelle de la terre",
            "Status": true
        },
        {
            "Nom": "JB 5430",
            "Distance": 28,
            "Caractéristiques": 1,
            "Nature": "Plusieurs anneaux",
            "Status": false
        },
    ];
}());