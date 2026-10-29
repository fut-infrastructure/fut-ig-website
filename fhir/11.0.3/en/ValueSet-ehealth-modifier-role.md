# Modifier Role - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modifier Role**

## ValueSet: Modifier Role (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/modifier-role | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:ModifierRole |

 
Value set of plan definition modifier role codes. 

 **References** 

* [Modified role](StructureDefinition-ehealth-modifier-role.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-modifier-role",
  "url" : "http://ehealth.sundhed.dk/vs/modifier-role",
  "version" : "11.0.3",
  "name" : "ModifierRole",
  "title" : "Modifier Role",
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
  "description" : "Value set of plan definition modifier role codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/modifier-role"
    }]
  }
}

```
