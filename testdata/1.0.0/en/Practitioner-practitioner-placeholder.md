# Practitioner (placeholder) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner (placeholder)**

## Example Practitioner: Practitioner (placeholder)

Profile: [ehealth-practitioner](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-practitioner.html)

Test ${EHEALTH_PROGRAM} Testesen (urn:oid:0.9.2342.19200300.100.1.1#${PRACTITIONER_IDENTIFIER})

-------

| | |
| :--- | :--- |
| Active: | true |
| Qualification: | Læge* Identifier: `https://autregweb.sst.dk`/00100
 |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-placeholder",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:0.9.2342.19200300.100.1.1",
    "value" : "${PRACTITIONER_IDENTIFIER}"
  }],
  "active" : true,
  "name" : [{
    "family" : "Testesen",
    "given" : ["Test", "${EHEALTH_PROGRAM}"]
  }],
  "qualification" : [{
    "identifier" : [{
      "system" : "https://autregweb.sst.dk",
      "value" : "00100"
    }],
    "code" : {
      "coding" : [{
        "system" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
        "code" : "7170",
        "display" : "Læge"
      }]
    }
  }]
}

```
