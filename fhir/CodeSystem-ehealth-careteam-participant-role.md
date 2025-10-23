# CareTeam Participant Role - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CareTeam Participant Role**

## CodeSystem: CareTeam Participant Role 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/careteam-participant-role | *Version*:6.0.0 |
| Active as of 2019-09-19 | *Computable Name*:CareTeamParticipantRole |

 
Care Team Participant Role 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CareTeamParticipantRole](ValueSet-ehealth-careteam-participant-role.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-careteam-participant-role",
  "url" : "http://ehealth.sundhed.dk/cs/careteam-participant-role",
  "version" : "6.0.0",
  "name" : "CareTeamParticipantRole",
  "title" : "CareTeam Participant Role",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-09-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Care Team Participant Role",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "citizenEnroller",
      "display" : "Citizen enroller",
      "definition" : "Citizen enroller",
      "designation" : [
        {
          "language" : "da",
          "value" : "Borgeropretter"
        }
      ]
    },
    {
      "code" : "clinicalViewer",
      "display" : "Clinical viewer",
      "definition" : "Clinical viewer",
      "designation" : [
        {
          "language" : "da",
          "value" : "Klinisk se adgang"
        }
      ]
    },
    {
      "code" : "monitoringAssistor",
      "display" : "Monitoring assistor",
      "definition" : "Monitoring assistor",
      "designation" : [
        {
          "language" : "da",
          "value" : "Monitoreringsmedhjælper"
        }
      ]
    },
    {
      "code" : "monitoring_adjuster",
      "display" : "Monitoring adjuster",
      "definition" : "Monitoring adjuster",
      "designation" : [
        {
          "language" : "da",
          "value" : "Monitoreringstilretter"
        }
      ]
    },
    {
      "code" : "reportUser",
      "display" : "Report user",
      "definition" : "Report user",
      "designation" : [
        {
          "language" : "da",
          "value" : "Nøgletalsmedarbejder"
        }
      ]
    },
    {
      "code" : "questionnaireEditor",
      "display" : "Questionnaire editor",
      "definition" : "Questionnaire editor",
      "designation" : [
        {
          "language" : "da",
          "value" : "Spørgeskemaeditor"
        }
      ]
    },
    {
      "code" : "clinicalAdministrator",
      "display" : "Clinical administrator",
      "definition" : "Clinical administrator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pakke- og forløbsbygger"
        }
      ]
    },
    {
      "code" : "clinicalSupporter",
      "display" : "Clinical supporter",
      "definition" : "Clinical supporter",
      "designation" : [
        {
          "language" : "da",
          "value" : "Klinisk supporter"
        }
      ]
    },
    {
      "code" : "careteamAdministrator",
      "display" : "Careteam administrator",
      "definition" : "Careteam administrator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Care Team Administrator"
        }
      ]
    },
    {
      "code" : "orderPlacer",
      "display" : "Order placer",
      "definition" : "Placer of orders",
      "designation" : [
        {
          "language" : "da",
          "value" : "Bestiller af udstyr"
        }
      ]
    },
    {
      "code" : "serviceAndLogistics",
      "display" : "Service and logistics",
      "definition" : "Service and logistics supporter at business partner",
      "designation" : [
        {
          "language" : "da",
          "value" : "Service og logistik samarbejdspartner"
        }
      ]
    },
    {
      "code" : "incidentReporter",
      "display" : "Incident reporter",
      "definition" : "Reporter of incidents",
      "designation" : [
        {
          "language" : "da",
          "value" : "Fejlmelder"
        }
      ]
    },
    {
      "code" : "incidentManager",
      "display" : "Incident manager",
      "definition" : "Incident manager",
      "designation" : [
        {
          "language" : "da",
          "value" : "Support samarbejdspartner"
        }
      ]
    },
    {
      "code" : "catalogueResponsible",
      "display" : "Catalogue responsible",
      "definition" : "SSL catalogue responsible",
      "designation" : [
        {
          "language" : "da",
          "value" : "Service og logistik katalogansvarlig"
        }
      ]
    },
    {
      "code" : "catalogueAnnotator",
      "display" : "Catalogue annotator",
      "definition" : "SSL catalogue annotator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Service og logistik katalogopmærker"
        }
      ]
    },
    {
      "code" : "contractResponsible",
      "display" : "Contract responsible",
      "definition" : "SSL contract responsible",
      "designation" : [
        {
          "language" : "da",
          "value" : "Service og logistik kontraktansvarlig"
        }
      ]
    },
    {
      "code" : "terminologyAdministrator",
      "display" : "Terminology administrator",
      "definition" : "Terminology administrator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Terminologiadministrator"
        }
      ]
    }
  ]
}

```
