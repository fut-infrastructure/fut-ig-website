# Shared definitions - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* **Shared definitions**

## Shared definitions

Shared data: the plan and the activities it is built from, the questionnaire, the automated-processing rules, the organizations and the patients. The care team and practitioner are not shared, but are present here as placeholders referenced by the scenario resources (templates). The loader substitutes the placeholder care team and practitioner when it duplicates the scenario for each vendor.

### Base.Individuals

The people the test data is about.

#### Patients

The patients the test data is about, each a concrete test identity from the target environment.

| | |
| :--- | :--- |
| [Patient 01](Patient-p01.md) | Test patient 01, CPR 0508754760. |
| [Patient 02](Patient-p02.md) | Test patient 02, CPR 1501989971. |
| [Patient 03](Patient-p03.md) | Test patient 03, CPR 2412589206. |
| [Patient 04](Patient-p04.md) | Test patient 04, CPR 1311633801. |
| [Patient 05](Patient-p05.md) | Test patient 05, CPR 0512894992. |
| [Patient 06](Patient-p06.md) | Test patient 06, CPR 1207969563. |
| [Patient 07](Patient-p07.md) | Test patient 07, CPR 1509829345. |
| [Patient 08](Patient-p08.md) | Test patient 08, CPR 1512543258. |
| [Patient 09](Patient-p09.md) | Test patient 09, CPR 1905839388. |
| [Patient 10](Patient-p10.md) | Test patient 10, CPR 0510049527. |

#### Practitioners

The practitioner on the care team. This is a placeholder, which the loader substitutes for each vendor with a vendor specific practitioner.

| | |
| :--- | :--- |
| [Practitioner (placeholder)](Practitioner-practitioner-placeholder.md) | Stands in for a practitioner on the care team the scenario runs under. The loader substitutes a real one. |

### Base.Entities

Organizations the definitions refer to.

#### Organizations

Organizations the definitions refer to.

| | |
| :--- | :--- |
| [Region Midtjylland](Organization-org-region-midtjylland.md) | Owner of the plan, its activities, the questionnaire and the automated-processing rules. |
| [Region Nordjylland](Organization-org-region-nordjylland.md) | Managing organization for the episodes of care and the care teams that deliver the monitoring. |

### Clinical.Care Provision

The plan as delivered to the patient: the care plan, the service requests it consists of, and the care team responsible.

#### CareTeams

The clinicians responsible for the episode.

| | |
| :--- | :--- |
| [KOL care team (placeholder)](CareTeam-careteam-placeholder.md) | Stands in for the care team the scenario runs under. The loader substitutes a real one. |

### Specialized.Definitional Artifacts

The plan, the activities it is built from, the questionnaire and the automated-processing rules.

#### PlanDefinitions

The monitoring plan: its branches, how each is scheduled, and the order its activities run in.

| | |
| :--- | :--- |
| [COPD monitoring plan (oxygen saturation, pulse and questionnaire)](PlanDefinition-plandefinition.md) | COPD monitoring plan with a scheduled mon/wed/fri branch and an unscheduled extra branch, each carrying the saturation and pulse device group and the symptom questionnaire. One submission against the extra branch yields one questionnaire response and two observations. |

#### ActivityDefinitions

One per step of the plan — the containers that group them, the guidance screens, the measurements and the questionnaire activity.

| | |
| :--- | :--- |
| [Closing](ActivityDefinition-ad-closing.md) | Closing guidance for a scheduled round. |
| [Extra head activity](ActivityDefinition-ad-extra-head.md) | Container for the unscheduled saturation, pulse and questionnaire. |
| [Extra pulse](ActivityDefinition-ad-extra-pulse.md) | Unscheduled heart rate, with the same absolute thresholds as the scheduled one. |
| [Extra questionnaire](ActivityDefinition-ad-extra-questionnaire.md) | Unscheduled Master Questionnaire activity, composed of the same questionnaire as the scheduled one. |
| [Extra oxygen saturation and pulse (same device group)](ActivityDefinition-ad-extra-sat-pulse.md) | The unscheduled same-device group. |
| [Extra oxygen saturation](ActivityDefinition-ad-extra-saturation.md) | Unscheduled oxygen saturation, with the same absolute thresholds as the scheduled one. |
| [Head activity](ActivityDefinition-ad-head.md) | Container for the scheduled saturation, pulse and questionnaire. |
| [Introduction](ActivityDefinition-ad-intro.md) | Opening guidance for a scheduled round. |
| [Pulse](ActivityDefinition-ad-pulse.md) | Heart rate, triaged against absolute thresholds: red at or below 50 and at or above 130, yellow either side of the 60-110 green band. |
| [Questionnaire](ActivityDefinition-ad-questionnaire.md) | Master Questionnaire activity presenting the symptom questionnaire, the single questionnaire of this plan. |
| [Oxygen saturation and pulse (same device group)](ActivityDefinition-ad-sat-pulse.md) | The same-device group: one pulse oximeter, one patient action, two values. Its children are the saturation and the pulse. |
| [Oxygen saturation and pulse measurement](ActivityDefinition-ad-sat-pulse-intro.md) | Guidance shown before the saturation and pulse measurement: warm the hands, and what the reading involves. |
| [Preparation](ActivityDefinition-ad-sat-pulse-prep.md) | Immediate preparation: sit still for five minutes beforehand and keep the hand steady during the reading. |
| [Oxygen saturation](ActivityDefinition-ad-saturation.md) | Oxygen saturation, triaged against absolute thresholds: red at or below 85%, yellow up to 88%, green above. |

#### Questionnaires

The questionnaire the plan collects, carrying the answer significance its triage rule reads.

| | |
| :--- | :--- |
| [COPD questionnaire](Questionnaire-questionnaire.md) | COPD symptom questionnaire: treatment status, three symptom scales, sputum colour and a conditional comment. Eighteen answer-significance mappings across green, yellow and red. |

#### Libraries

The automated-processing rules the measurement and questionnaire activities point at.

| | |
| :--- | :--- |
| [observation-absolute-range-triage](Library-library-observation-absolute-triage.md) | Triages a submitted observation against absolute thresholds expressed in the observation's own unit. Reads the reference ranges from the observation it is given, so a measurement must carry them to be assessed; a GAL range yields a yellow assessment and a RAL range a red one. |
| [questionnaire-response-triage-on-answersignificance](Library-library-questionnaire-triage.md) | Triages a submitted questionnaire response by matching each answer against the answer-significance mappings on the questionnaire, and recording one finding basis per answered question alongside the overall assessment. |

### Foundation.Other

Settings the loader reads before it loads anything. Not test data, and not created on the target.

#### Parameters

Loader settings, chiefly the anchor date every date in the data is relative to.

| | |
| :--- | :--- |
| [Loader settings](Parameters-loader-settings.md) | Read by the loader, never loaded. anchorDate is the day the scenario is written for: it maps to the load date, and every date in the data shifts by the same number of days. Table pairing the coexistence tag with the programme it runs: the loader substitutes ${COEXISTENCE_TAG} and ${EHEALTH_PROGRAM} together, making one copy of the vendor-scoped data per vendor listed here. |

#### Bundles

Copies of the core IG code systems the loader checks the coexistence tags and programmes against.

| | |
| :--- | :--- |
| [Loader code systems](Bundle-loader-codesystems.md) | Read by the loader, never loaded. The ehealth-system and ehealth-program CodeSystems of dk.ehealth.sundhed.fhir.ig.core: the loader checks the coexistence tags against them, and adds any codes the terminology service lacks. |

