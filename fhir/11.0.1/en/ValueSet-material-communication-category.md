# MaterialCommunicationCategory - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaterialCommunicationCategory**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/material-communication-category | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:MaterialCommunicationCategory |

 
The set of possible material-communication categories 

 **References** 

* [ehealth-material-communication](StructureDefinition-ehealth-material-communication.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "material-communication-category",
  "url" : "http://ehealth.sundhed.dk/vs/material-communication-category",
  "version" : "11.0.1",
  "name" : "MaterialCommunicationCategory",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The set of possible material-communication categories",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/material-communication-category"
    }]
  }
}

```
