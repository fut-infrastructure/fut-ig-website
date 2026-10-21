# Modifier Role - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modifier Role**

## CodeSystem: Modifier Role 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/modifier-role | *Version*:11.0.0 |
| Active as of 2019-01-29 | *Computable Name*:ModifierRole |

 
Modifier Role 

This Code system is referenced in the definition of the following value sets:

* [Modifier Role](ValueSet-ehealth-modifier-role.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-modifier-role",
  "url" : "http://ehealth.sundhed.dk/cs/modifier-role",
  "version" : "11.0.0",
  "name" : "ModifierRole",
  "title" : "Modifier Role",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Modifier Role",
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
    "code" : "owner",
    "display" : "Owner",
    "definition" : "Owner",
    "designation" : [{
      "language" : "da",
      "value" : "Ejer"
    }]
  },
  {
    "code" : "co-author",
    "display" : "Co-author",
    "definition" : "Co-author",
    "designation" : [{
      "language" : "da",
      "value" : "Medforfatter"
    }]
  }]
}

```
