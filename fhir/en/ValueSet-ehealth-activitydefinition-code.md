# Activity Definition Code - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Activity Definition Code**

## ValueSet: Activity Definition Code (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/activitydefinition-code | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:ActivityDefinitionCode |

 
Activity Definition Code. 

 **References** 

* [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md)
* [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-activitydefinition-code",
  "url" : "http://ehealth.sundhed.dk/vs/activitydefinition-code",
  "version" : "11.0.1",
  "name" : "ActivityDefinitionCode",
  "title" : "Activity Definition Code",
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
  "description" : "Activity Definition Code.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code"
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes",
      "http://ehealth.sundhed.dk/vs/media-codes"]
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "445988008"
      },
      {
        "code" : "229057006"
      },
      {
        "code" : "273586006"
      },
      {
        "code" : "409073007"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "ALCA00"
      },
      {
        "code" : "ALCA03"
      }]
    }]
  }
}

```
