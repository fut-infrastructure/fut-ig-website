# Chronic obstructive pulmonary disease (episode 4) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Chronic obstructive pulmonary disease (episode 4)**

## Example Condition: Chronic obstructive pulmonary disease (episode 4)

Profile: [ehealth-condition](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-condition.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-28 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p10-eoc4.md)

**clinicalStatus**: Active

**code**: Kronisk obstruktiv lungesygdom

**subject**: [Martin Kristensen (official) Male, DoB: 2004-10-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0510049527 (use: official))](Patient-p10.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "p10-eoc4-cond",
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
      "reference" : "EpisodeOfCare/p10-eoc4"
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
    "reference" : "Patient/p10"
  }
}

```
