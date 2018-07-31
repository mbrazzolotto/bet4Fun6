import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MesGrpComponent } from './mes-grp.component';

describe('MesGrpComponent', () => {
  let component: MesGrpComponent;
  let fixture: ComponentFixture<MesGrpComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MesGrpComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MesGrpComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
