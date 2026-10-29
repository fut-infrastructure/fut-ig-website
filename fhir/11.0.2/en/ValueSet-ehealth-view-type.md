# View Type - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **View Type**

## ValueSet: View Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/view-type | *Version*:11.0.2 |
| Active as of 2021-10-14 | *Computable Name*:ViewType |

 
View types 

 **References** 

* [View type](StructureDefinition-ehealth-view-type.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-view-type",
  "url" : "http://ehealth.sundhed.dk/vs/view-type",
  "version" : "11.0.2",
  "name" : "ViewType",
  "title" : "View Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-14T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "View types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/view-type"
    }]
  }
}

```
