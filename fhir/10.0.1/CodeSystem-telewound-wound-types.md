# Wound types - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Wound types**

## CodeSystem: Wound types 

| | |
| :--- | :--- |
| *Official URL*:https://rn.dk/telemedicinsk-saarvurdering/fosa/terminologi/saar-typer | *Version*:10.0.1 |
| Active as of 2026-03-25 | *Computable Name*:WoundTypes |

 
Wound types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [conditionQualificationTeleWound](ValueSet-condition-qualification-tele-wound.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "telewound-wound-types",
  "url" : "https://rn.dk/telemedicinsk-saarvurdering/fosa/terminologi/saar-typer",
  "version" : "10.0.1",
  "name" : "WoundTypes",
  "title" : "Wound types",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-25T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Wound types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "TS1",
    "display" : "Arterielt sår"
  },
  {
    "code" : "TS2",
    "display" : "Diabetisk fodsår"
  },
  {
    "code" : "TS3",
    "display" : "Hudkræft-sår"
  },
  {
    "code" : "TS4",
    "display" : "Immunologisk sår"
  },
  {
    "code" : "TS5",
    "display" : "Overfladisk læsion af kroppen uden specifikation"
  },
  {
    "code" : "TS6",
    "display" : "Tryksår"
  },
  {
    "code" : "TS7",
    "display" : "Venøst sår"
  },
  {
    "code" : "TS8",
    "display" : "Eksem"
  },
  {
    "code" : "TS9",
    "display" : "Kronisk sår på huden"
  },
  {
    "code" : "TS10",
    "display" : "Kronisk sår på ben IKA"
  },
  {
    "code" : "TS11",
    "display" : "Traumesår"
  },
  {
    "code" : "TS12",
    "display" : "Brandsår"
  },
  {
    "code" : "TS13",
    "display" : "Kirugisk sår"
  },
  {
    "code" : "TS14",
    "display" : "Stomi-sår"
  }]
}

```
