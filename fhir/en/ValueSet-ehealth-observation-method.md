# Observation Method - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation Method**

## ValueSet: Observation Method (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/observation-method | *Version*:11.0.1 |
| Active as of 2024-10-29 | *Computable Name*:ObservationMethod |

 
Identifies how an observation is acquired. 

 **References** 

* [Observation method](StructureDefinition-ehealth-observation-method.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-observation-method",
  "url" : "http://ehealth.sundhed.dk/vs/observation-method",
  "version" : "11.0.1",
  "name" : "ObservationMethod",
  "title" : "Observation Method",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-10-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Identifies how an observation is acquired.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/observation-method",
      "concept" : [{
        "code" : "measured",
        "display" : "Measured"
      },
      {
        "code" : "calculated",
        "display" : "Calculated"
      }]
    }]
  }
}

```
