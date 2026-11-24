# Chronic obstructive pulmonary disease (episode 1) - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Chronic obstructive pulmonary disease (episode 1)**

## Example Condition: Chronic obstructive pulmonary disease (episode 1)

Profile: [ehealth-condition](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-condition.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-12-01 09:00:00+0000 --> 2026-04-13 12:00:00+0000](EpisodeOfCare-p07-eoc1.md)

**clinicalStatus**: Active

**code**: Kronisk obstruktiv lungesygdom

**subject**: [Karl Larsen (official) Male, DoB: 1982-09-15 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1509829345 (use: official))](Patient-p07.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "p07-eoc1-cond",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p07-eoc1"
    }
  }],
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
      "code" : "active",
      "display" : "Active"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "code" : "DJ44",
      "display" : "Kronisk obstruktiv lungesygdom"
    }]
  },
  "subject" : {
    "reference" : "Patient/p07"
  }
}

```
