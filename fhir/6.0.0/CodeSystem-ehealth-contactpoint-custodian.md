# ContactPoint Custodian - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ContactPoint Custodian**

## CodeSystem: ContactPoint Custodian 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/contactpoint-custodian | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:ContactPointCustodian |

 
Contact Point Custodian 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ContactPointCustodian](ValueSet-ehealth-contactpoint-custodian.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-contactpoint-custodian",
  "url" : "http://ehealth.sundhed.dk/cs/contactpoint-custodian",
  "version" : "6.0.0",
  "name" : "ContactPointCustodian",
  "title" : "ContactPoint Custodian",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Contact Point Custodian",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "property" : [
    {
      "code" : "deprecated",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
      "description" : "Indicates that the concept is deprecated and should not be used",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "TBD",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "SOR",
      "display" : "Contact point maintained in the SOR register",
      "definition" : "Contact point maintained in the SOR register",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kontaktinformation vedligeholdt i Sundhedsvæsenets organisationsregister (SOR)"
        }
      ]
    },
    {
      "code" : "ORG",
      "display" : "Contact point maintained in KOMBIT STS Organisation",
      "definition" : "Contact point maintained in KOMBIT STS Organisation",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kontaktinformation vedligeholdt i KOMBIT STS Organisation"
        }
      ]
    },
    {
      "code" : "MAN",
      "display" : "Contact point maintained manually in eHealth Infrastructure",
      "definition" : "Contact point maintained manually in eHealth Infrastructure"
    }
  ]
}

```
