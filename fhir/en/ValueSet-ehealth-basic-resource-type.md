# Basic resource type - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Basic resource type**

## ValueSet: Basic resource type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/basic-resource-type | *Version*:11.0.3 |
| Active as of 2021-10-20 | *Computable Name*:BasicResourceType |

 
Basic resource type 

 **References** 

* [ehealth-actionguidance](StructureDefinition-ehealth-actionguidance.md)
* [ehealth-questionnairelinkage](StructureDefinition-ehealth-questionnairelinkage.md)
* [ehealth-view](StructureDefinition-ehealth-view.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-basic-resource-type",
  "url" : "http://ehealth.sundhed.dk/vs/basic-resource-type",
  "version" : "11.0.3",
  "name" : "BasicResourceType",
  "title" : "Basic resource type",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-20T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Basic resource type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/basic-resource-type"
    }]
  }
}

```
