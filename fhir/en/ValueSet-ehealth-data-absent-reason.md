# Data Absent Reason - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Data Absent Reason**

## ValueSet: Data Absent Reason 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/data-absent-reason | *Version*:11.0.2 |
| Active as of 2023-04-13 | *Computable Name*:DataAbsentReason |

 
Used to specify why the normally expected content of the data element is missing. 

 **References** 

* [ehealth-observation](StructureDefinition-ehealth-observation.md)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unsupported Code System Version)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-data-absent-reason",
  "url" : "http://ehealth.sundhed.dk/vs/data-absent-reason",
  "version" : "11.0.2",
  "name" : "DataAbsentReason",
  "title" : "Data Absent Reason",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-04-13T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Used to specify why the normally expected content of the data element is missing.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
      "version" : "11.0.2",
      "concept" : [{
        "code" : "asked-declined",
        "display" : "Asked But Declined"
      },
      {
        "code" : "error",
        "display" : "Error"
      }]
    }]
  }
}

```
