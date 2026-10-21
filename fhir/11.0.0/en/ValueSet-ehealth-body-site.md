# Body site - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Body site**

## ValueSet: Body site (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/body-site | *Version*:11.0.0 |
| Active as of 2024-10-21 | *Computable Name*:BodySite |

 
Body site 

 **References** 

* [ehealth-media](StructureDefinition-ehealth-media.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-body-site",
  "url" : "http://ehealth.sundhed.dk/vs/body-site",
  "version" : "11.0.0",
  "name" : "BodySite",
  "title" : "Body site",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-10-21T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Body site",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://hl7.org/fhir/ValueSet/body-site"]
    }]
  }
}

```
