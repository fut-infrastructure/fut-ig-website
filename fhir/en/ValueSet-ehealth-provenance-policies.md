# Policies for provenances - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Policies for provenances**

## ValueSet: Policies for provenances 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-provenance-policies | *Version*:11.0.1 |
| Active as of 2019-02-02 | *Computable Name*:Policies for provenances |

 
Policies under which data can be provided 

 **References** 

* [ehealth-provenance](StructureDefinition-ehealth-provenance.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-provenance-policies",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-provenance-policies",
  "version" : "11.0.1",
  "name" : "Policies for provenances",
  "title" : "Policies for provenances",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-02-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Policies under which data can be provided",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-provenance-policies"
    }]
  }
}

```
