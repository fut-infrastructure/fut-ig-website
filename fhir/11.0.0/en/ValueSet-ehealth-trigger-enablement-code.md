# Trigger Enablement Code - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trigger Enablement Code**

## ValueSet: Trigger Enablement Code (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/trigger-enablement-code | *Version*:11.0.0 |
| Active as of 2021-10-22 | *Computable Name*:triggerEnablementCode |

 
ServiceRequest trigger enablement value set. 

 **References** 

* [triggerEnablementCode](StructureDefinition-ehealth-trigger-enablement-code.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-trigger-enablement-code",
  "url" : "http://ehealth.sundhed.dk/vs/trigger-enablement-code",
  "version" : "11.0.0",
  "name" : "triggerEnablementCode",
  "title" : "Trigger Enablement Code",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-22T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "ServiceRequest trigger enablement value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/trigger-enablement-code"
    }]
  }
}

```
