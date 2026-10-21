# eHealth Message Reason Code - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Message Reason Code**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/message-reasonCode | *Version*:11.0.0 |
| Active as of 2019-02-08 | *Computable Name*:eHealth Message Reason Code |

 
eHealth Message Reason Code 

 **References** 

* [ehealth-message](StructureDefinition-ehealth-message.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-message-reasonCode",
  "url" : "http://ehealth.sundhed.dk/vs/message-reasonCode",
  "version" : "11.0.0",
  "name" : "eHealth Message Reason Code",
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
  "description" : "eHealth Message Reason Code",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/task-category"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/message-reasonCode"
    }]
  }
}

```
