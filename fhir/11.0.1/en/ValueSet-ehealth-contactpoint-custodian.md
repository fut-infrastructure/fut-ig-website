# ContactPoint Custodian - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ContactPoint Custodian**

## ValueSet: ContactPoint Custodian (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/contactpoint-custodian | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:ContactPointCustodian |

 
Contact point custodians. 

 **References** 

* [Telecom Custodian](StructureDefinition-ehealth-organization-telecomCustodian.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-contactpoint-custodian",
  "url" : "http://ehealth.sundhed.dk/vs/contactpoint-custodian",
  "version" : "11.0.1",
  "name" : "ContactPointCustodian",
  "title" : "ContactPoint Custodian",
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
  "description" : "Contact point custodians.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/contactpoint-custodian"
    }]
  }
}

```
