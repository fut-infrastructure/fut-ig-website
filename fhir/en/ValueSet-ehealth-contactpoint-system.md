# ContactPoint System - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ContactPoint System**

## ValueSet: ContactPoint System (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/contactpoint-system | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:ContactPointSystem |

 
Contact point systems. 

 **References** 

* [Telecom System](StructureDefinition-ehealth-organization-telecomSystem.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-contactpoint-system",
  "url" : "http://ehealth.sundhed.dk/vs/contactpoint-system",
  "version" : "11.0.3",
  "name" : "ContactPointSystem",
  "title" : "ContactPoint System",
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
  "description" : "Contact point systems.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://hl7.org/fhir/ValueSet/contact-point-system"]
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/contactpoint-system"
    }]
  }
}

```
