# Create Managed Related Person - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Create Managed Related Person**

## OperationDefinition: Create Managed Related Person 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-relatedperson-create-managed | *Version*:11.0.1 |
| Active as of 2026-07-21 | *Computable Name*:Create Managed Related Person |

 
Creates a managed RelatedPerson resource on the server and returns it. The related person's master data (official name, gender, date of birth, home address, and name and address protection) is seeded from the national registry using the supplied CPR number, and the resource is marked with `meta.security = http://ehealth.sundhed.dk/cs/data-governance|managed` so that the infrastructure keeps its master data synchronized and locked against client edits. The caller supplies the patient the related person is related to, one or more relationships, and any tags to apply. The operation is not idempotent: each call creates a new RelatedPerson, and multiple managed RelatedPerson resources may exist for the same related-person CPR and patient. The relationship codes POWATT (power of attorney holder) and PARAUTH (holder of parental authority) are reserved for related persons that the infrastructure creates automatically and are rejected by this operation. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ehealth-relatedperson-create-managed",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-relatedperson-create-managed",
  "version" : "11.0.1",
  "name" : "Create Managed Related Person",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-07-21",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Creates a managed RelatedPerson resource on the server and returns it. The related person's master data (official name, gender, date of birth, home address, and name and address protection) is seeded from the national registry using the supplied CPR number, and the resource is marked with `meta.security = http://ehealth.sundhed.dk/cs/data-governance|managed` so that the infrastructure keeps its master data synchronized and locked against client edits. The caller supplies the patient the related person is related to, one or more relationships, and any tags to apply. The operation is not idempotent: each call creates a new RelatedPerson, and multiple managed RelatedPerson resources may exist for the same related-person CPR and patient. The relationship codes POWATT (power of attorney holder) and PARAUTH (holder of parental authority) are reserved for related persons that the infrastructure creates automatically and are rejected by this operation.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "create-managed-related-person",
  "resource" : ["RelatedPerson"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "cpr",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "The CPR number of the related person whose master data is seeded from the national registry. Uses the CPR system urn:oid:1.2.208.176.1.2.",
    "type" : "Identifier"
  },
  {
    "name" : "patient",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Reference to the patient the related person is related to.",
    "type" : "Reference"
  },
  {
    "name" : "relationship",
    "use" : "in",
    "min" : 1,
    "max" : "*",
    "documentation" : "One or more relationships the related person has to the patient. Bound to the RelationshipTypes value set. POWATT and PARAUTH are rejected.",
    "type" : "CodeableConcept"
  },
  {
    "name" : "tag",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "Tags to apply to the created RelatedPerson, including the co-existence tag identifying the client solution.",
    "type" : "Coding"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 1,
    "max" : "1",
    "documentation" : "The managed RelatedPerson resource that has been created on the server.",
    "type" : "RelatedPerson"
  }]
}

```
